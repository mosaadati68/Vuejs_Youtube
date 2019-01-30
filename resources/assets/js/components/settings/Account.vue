<template>
    <v-tabs-content
          id="account"
    >
        <v-container>
            <v-layout row wrap>
                <p class="primary--text">جزئیات حساب کاربری</p>
                <v-flex xs12>
                    <!--v-validate="{ required: true, regex: /^[a-zA-Z0-9][a-zA-Z0-9.-]+[a-zA-Z0-9]$/ }"-->
                    <v-text-field
                    label="نام کاربری"
                    data-vv-as="نام کاربری"
                    v-model="username"
                    light
                    v-validate="'required|max:255'"
                    :error-messages="errors.collect('username')"
                    data-vv-name="username"
                    >
                    </v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    label="آدرس ایمیل"
                    data-vv-as="آدرس ایمیل"
                    v-model="email"
                    light
                    v-validate="{ required: true, email: true }"
                    :error-messages="errors.collect('email')"
                    data-vv-name="email"
                    >
                    </v-text-field>
                </v-flex>
                <v-flex xs12>
                    <!--v-validate="{ required: true, regex: /^[a-zA-Z0-9 ]+$/ }"-->
                    <v-text-field
                    label="نام و نام خانوادگی"
                    data-vv-as="نام و نام خانوادگی"
                    v-model="name"
                    light
                    v-validate="'required|max:255'"
                    :error-messages="errors.collect('name')"
                    data-vv-name="name"
                    >
                    </v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    label="پسورد فعلی"
                    data-vv-as="پسورد فعلی"
                    v-model="old_password"
                    light
                    v-validate="{ min: 6,regex: /^([a-zA-Z0-9@*#]{6,15})$/ }"
                    :error-messages="errors.collect('current password')"
                    data-vv-name="current password"
                    >
                    </v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    label="پسورد جدید"
                    data-vv-as="پسورد جدید"
                    v-model="password"
                    light
                    name="password"
                    v-validate="{ min: 6,regex: /^([a-zA-Z0-9@*#]{6,15})$/ }"
                    :error-messages="errors.collect('new password')"
                    data-vv-name="new password"
                    >
                    </v-text-field>
                </v-flex>
                <v-flex xs12>
                    <v-text-field
                    label="تکرار پسورد جدید"
                    data-vv-as="تکرار پسورد جدید"
                    v-model="password_confirmation"
                    light
                    v-validate="'confirmed:password'"
                    :error-messages="errors.collect('confirm new password')"
                    data-vv-name="confirm new password"
                    >
                    </v-text-field>
                </v-flex>
                <v-btn block color="primary" @click="updateAccount()">
                    بروزرسانی حساب کاربری <v-icon right style="transform: rotate(270deg); margin-right: 10px">fa-send</v-icon>
                </v-btn>
            </v-layout>
        </v-container>
    </v-tabs-content>
</template>

<script>
import { createNamespacedHelpers } from 'vuex'
const { mapGetters, mapMutations } = createNamespacedHelpers('auth')

export default {
    data: () => ({
        accountForm: new AppForm(App.forms.accountForm),
        name: null,
        email: null,
        username: null,
        old_password: null,
        password: null,
        password_confirmation: null
    }),
    computed: {
        ...mapGetters({
            getMe: 'getMe'
        })
    },
    mounted () {
        let self = this
        self.name = self.getMe.name
        self.email = self.getMe.email
        self.username = self.getMe.username
    },
    methods: {
        ...mapMutations({
            setMe: 'setMe'
        }),
        prepareAccountForm () {
            let self = this
            self.accountForm.name = self.name
            self.accountForm.username = self.username
            self.accountForm.email = self.email
            self.accountForm.old_password = self.old_password
            self.accountForm.password = self.password
            self.accountForm.password_confirmation = self.password_confirmation
            if (self.old_password === null) {
                delete self.accountForm.old_password
                delete self.accountForm.password
                delete self.accountForm.password_confirmation
            }
        },
        resetAccountForm () {
            let self = this
            self.accountForm = new AppForm(App.forms.accountForm)
        },
        async updateAccount () {
            let self = this
            self.accountForm.busy = true
            self.prepareAccountForm()
            try {
                const payload = (await App.post(route('api.user.updateAccount'), self.accountForm))
                self.resetAccountForm()
                self.setMe(payload.data)
                self.old_password = null
                self.password = null
                self.password_confirmation = null
                vm.$popup({ message: payload.message, backgroundColor: '#4db6ac', delay: 5, color: '#fffffa' })
            } catch ({errors, message}) {
                self.accountForm.errors.set(errors)
                self.accountForm.busy = false
                /* for wrong password */
                if (errors.old_password[0]) {
                    vm.$popup({ message: errors.old_password[0], backgroundColor: '#e57373', delay: 5, color: '#fffffa' })
                } else {
                    vm.$popup({ message: message, backgroundColor: '#e57373', delay: 5, color: '#fffffa' })
                }
            }
        }
    }
}
</script>

<style>

</style>
