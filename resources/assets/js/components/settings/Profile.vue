<template>
    <v-tabs-content
            id="profile"
    >
        <v-container>
            <v-layout row wrap>
                <p class="primary--text">جزئیات پروفایل</p>
                <v-flex xs12>
                    <v-alert color="primary" icon="warning" value="true">
                        <span class="white--text">** از این اطلاعات به عنوان پیش فرض برای ارسال کالا و پرداخت استفاده می شود **</span>
                    </v-alert>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                            label="نام"
                            data-vv-as="نام"
                            v-model="first_name"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('first_name')"
                            data-vv-name="first_name"
                    >
                    </v-text-field>
                    <v-text-field
                            label="نام خانوادگی"
                            data-vv-as="نام خانوادگی"
                            v-model="last_name"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('last_name')"
                            data-vv-name="last_name"
                    >
                    </v-text-field>
                    <v-text-field
                            label="شماره تلفن"
                            data-vv-as="شماره تلفن"
                            v-model="contact_no"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('contact_no')"
                            data-vv-name="contact_no"
                    >
                    </v-text-field>
                    <v-text-field
                            label="آدرس اول"
                            data-vv-as="آدرس اول"
                            v-model="address_1"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('address_1')"
                            data-vv-name="address_1"
                    >
                    </v-text-field>
                    <v-text-field
                            label="آدرس دوم"
                            data-vv-as="آدرس دوم"
                            v-model="address_2"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('address_2')"
                            data-vv-name="address_2"
                    >
                    </v-text-field>
                    <v-text-field
                            label="شهر"
                            data-vv-as="شهر"
                            v-model="city"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('city')"
                            data-vv-name="city"
                    >
                    </v-text-field>
                    <v-text-field
                            label="کشور"
                            data-vv-as="کشور"
                            v-model="country"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('country')"
                            data-vv-name="country"
                    >
                    </v-text-field>
                    <v-text-field
                            label="کد پستی"
                            data-vv-as="کد پستی"
                            v-model="zip_code"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('zip_code')"
                            data-vv-name="zip_code"
                    >
                    </v-text-field>
                    <v-text-field
                            label="استان"
                            data-vv-as="استان"
                            v-model="state_province"
                            light
                            v-validate="'required|max:255'"
                            :error-messages="errors.collect('state_province')"
                            data-vv-name="state_province"
                    >
                    </v-text-field>
                    <!--<v-text-field-->
                    <!--:label="toProperCase(key)"-->
                    <!--v-model="profile[key]"-->
                    <!--light-->
                    <!--v-for="(value,key,index) in profile" :key="key" :index="index"-->
                    <!--v-validate="{ required: true, regex: /^[a-zA-Z0-9 +@#]+$/ }"-->
                    <!--:error-messages="errors.collect(toProperCase(key))"-->
                    <!--:data-vv-name="toProperCase(key)"-->
                    <!--&gt;-->
                    <!--</v-text-field>-->
                </v-flex>
                <v-btn block color="primary" @click="updateProfile()">
                    یروزرسانی پروفایل
                    <v-icon right style="transform: rotate(270deg); margin-right: 10px">fa-send</v-icon>
                </v-btn>
            </v-layout>
        </v-container>
    </v-tabs-content>
</template>

<script>
    import {createNamespacedHelpers} from 'vuex'

    const {mapGetters, mapMutations} = createNamespacedHelpers('auth')

    export default {
        data: () => ({
            profileForm: new AppForm(App.forms.profileForm),
            profile: {},
            first_name: null,
            last_name: null,
            contact_no: null,
            address_1: null,
            address_2: null,
            city: null,
            country: null,
            zip_code: null,
            state_province: null
        }),
        computed: {
            ...mapGetters({
                getMe: 'getMe'
            })
        },
        mounted() {
            let self = this
//            self.profile = self.getMe.profile
            console.log(self.getMe.profile);
            self.first_name = self.getMe.profile.first_name
            self.last_name = self.getMe.profile.last_name
            self.contact_no = self.getMe.profile.contact_no
            self.address_1 = self.getMe.profile.address_1
            self.address_2 = self.getMe.profile.address_2
            self.city = self.getMe.profile.city
            self.country = self.getMe.profile.country
            self.zip_code = self.getMe.profile.zip_code
            self.state_province = self.getMe.profile.state_province
        },
        methods: {
            ...mapMutations({
                setMe: 'setMe'
            }),
            prepareProfileForm() {
                let self = this
                self.profileForm.first_name = self.first_name
                if (self.first_name === null) {
                    delete self.profileForm.first_name
                }
                self.profileForm.last_name = self.last_name
                if (self.last_name === null) {
                    delete self.profileForm.last_name
                }
                self.profileForm.contact_no = self.contact_no
                if (self.contact_no === null) {
                    delete self.profileForm.contact_no
                }
                self.profileForm.address_1 = self.address_1
                if (self.address_1 === null) {
                    delete self.profileForm.address_1
                }
                self.profileForm.address_2 = self.address_2
                if (self.address_2 === null) {
                    delete self.profileForm.address_2
                }
                self.profileForm.city = self.city
                if (self.city === null) {
                    delete self.profileForm.city
                }
                self.profileForm.country = self.country
                if (self.country === null) {
                    delete self.profileForm.country
                }
                self.profileForm.zip_code = self.zip_code
                if (self.zip_code === null) {
                    delete self.profileForm.zip_code
                }
                self.profileForm.state_province = self.state_province
                if (self.state_province === null) {
                    delete self.profileForm.state_province
                }
            },
            resetProfileForm() {
                let self = this
                self.profileForm = new AppForm(App.forms.profileForm)
            },
            async updateProfile() {
                let self = this
                self.prepareProfileForm()
                self.profileForm.busy = true
                try {
                    console.log(self.profileForm);
                    const payload = (await App.post(route('api.user.updateProfile'), self.profileForm))
                    self.resetProfileForm()
                    self.setMe(payload.data)
                    vm.$popup({message: payload.message, backgroundColor: '#4db6ac', delay: 5, color: '#fffffa'})
                } catch ({errors, message}) {
                    self.profileForm.errors.set(errors)
                    self.profileForm.busy = false
                    vm.$popup({message: message, backgroundColor: '#e57373', delay: 5, color: '#fffffa'})
                }
            },
            toProperCase(key) {
                let newStr = key.replace(/_/g, ' ')
                return newStr.replace(/\w\S*/g, function (txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase()
                })
            }
        }
    }
</script>

<style>

</style>
