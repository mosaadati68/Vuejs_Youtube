<template>
    <v-tabs-content
    id="social-links"
    >
        <v-container>
            <v-layout row wrap v-if="hasSocialKeys">
                <v-flex xs6>
                <v-btn block @click.native="updateSocialLinks()"
                :disabled="errors.any()"
                :loading="socialLinksForm.busy"
                class="white--text"
                :class="{primary: !socialLinksForm.busy , error: socialLinksForm.busy }"
                light
                >آپدیت لینک ها
                    <v-icon right style="transform: rotate(270deg); margin-right: 10px">fa-send</v-icon>
                </v-btn>
                </v-flex>
                <v-flex xs6>
                <v-btn block color="accent" @click.native="openModal()"
                >ایجاد لینک جدید
                    <v-icon right style="margin-right: 10px">fa-plus</v-icon>
                </v-btn>
                </v-flex>
            </v-layout>
            <v-layout row wrap v-else>
                <v-flex xs12>
                <v-btn block color="accent" @click.native="openModal()"
                >ایجاد لینک جدید
                    <v-icon right style="margin-right: 10px">fa-plus</v-icon>
                </v-btn>
                </v-flex>
            </v-layout>

            <v-layout row wrap v-if="hasSocialKeys">
                <p class="primary--text">لینک شبکه های اجتماعی</p>
                <v-flex xs12>
                    <v-alert color="primary" icon="warning" value="true">
                            <span class="white--text">** آدرس شبکه های اجتماعی به صورت عمومی در سایت نمایش داده می شود **</span>
                    </v-alert>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    :label="toProperCase(key)"
                    v-model="social_links[key]"
                    light
                    v-for="(value,key,index) in social_links" :key="key" :index="index"
                    v-validate="{ required: true, regex: /^((https?):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#.]+\/?)*$/ }"
                    :error-messages="errors.collect(key)"
                    :data-vv-name="key"
                    append-icon="fa-trash"
                    :append-icon-cb="() => (deleteSocialKey(key))"
                    >
                    </v-text-field>
                </v-flex>

            </v-layout>

            <v-layout row wrap v-else>
                <v-flex xs12 text-xs-center>
                    <v-card light :class="[contentClass]" flat >
                            <v-card-text>
                            <h4>لینکی برای نمایش وجود ندارد!</h4>
                            <p class="title">ایجاد لینک شبکه های اجتماعی</p>
                            <p class="body-2">توجه : این لینک ها در صفحه اصلی نمایش داده می شود.</p>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>

            <new-social-link></new-social-link>

        </v-container>
    </v-tabs-content>
</template>

<script>
import NewSocialLink from './NewSocialLink'
import { createNamespacedHelpers } from 'vuex'
const { mapGetters, mapMutations } = createNamespacedHelpers('auth')

export default {
    components: {
        NewSocialLink
    },
    data: () => ({
        contentClass: { 'grey': true, 'lighten-4': true, 'accent--text': true },
        social_links: {},
        socialLinksForm: new AppForm(App.forms.socialLinksForm),
        hasSocialKeys: false
    }),
    computed: {
        ...mapGetters({
            getMe: 'getMe'
        })
    },
    mounted () {
        let self = this
        /* check the return value when we dont have social links its an array it should be an empty objec */
        if (self.getMe.social_links === null) {
            self.social_links = {}
            self.hasSocialKeys = false
        } else if (!_.isEmpty(self.getMe.social_links)) {
            self.social_links = self.getMe.social_links
            self.hasSocialKeys = true
        } else if (self.getMe.social_links.length > 0) {
            self.social_links = self.getMe.social_links
            self.hasSocialKeys = true
        } else {
            self.social_links = {}
            self.hasSocialKeys = false
        }

        Bus.$on('update-social-link', (link) => {
            self.social_links[link.title] = link.value
            self.updateSocialLinks()
        })
    },
    methods: {
        ...mapMutations({
            setMe: 'setMe'
        }),
        isEmpty (obj) {
            return Object.keys(obj).length === 0
        },
        openModal () {
            Bus.$emit('add-new-social-link')
        },
        async deleteSocialKey (key) {
            let self = this
            delete self.social_links[key]
            await self.updateSocialLinks()
            if (_.isEmpty(self.social_links)) {
                self.hasSocialKeys = false
            }
        },
        prepareSocialLinkForm () {
            let self = this
            self.socialLinksForm.social_links = self.social_links
        },
        resetSocialLinkForm () {
            let self = this
            self.socialLinksForm = new AppForm(App.forms.socialLinksForm)
        },
        async updateSocialLinks () {
            let self = this
            self.prepareSocialLinkForm()
            self.$validator.validateAll()
            if (!self.errors.any()) {
                self.socialLinksForm.busy = true
                try {
                    const payload = (await App.post(route('api.user.updateSocialLink'), self.socialLinksForm))
                    self.resetSocialLinkForm()
                    self.setMe(payload.data)
                    self.hasSocialKeys = true
                    vm.$popup({ message: payload.message, backgroundColor: '#4db6ac', delay: 5, color: '#fffffa' })
                } catch ({errors, message}) {
                    self.socialLinksForm.errors.set(errors)
                    self.socialLinksForm.busy = false
                    vm.$popup({ message: message, backgroundColor: '#e57373', delay: 5, color: '#fffffa' })
                }
            }
        },
        toProperCase (key) {
            let newStr = key.replace(/_/g, ' ')
            return newStr.replace(/\w\S*/g, function (txt) { return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase() })
        }
    }
}
</script>

<style>

</style>
