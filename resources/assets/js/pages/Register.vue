<template>
    <modal-layout>
        <v-card :flat="true">
            <v-toolbar class="accent">
                <v-btn flat icon color="primary" @click.native="redirectBack()">
                    <v-icon>arrow_back</v-icon>
                </v-btn>
                <v-spacer></v-spacer>
                <v-toolbar-title class="text-xs-center primary--text">صفحه ثبت نام </v-toolbar-title>
                <v-spacer></v-spacer>
                <v-toolbar-items>
                    <!-- If There is no User Account Login Yet Redirect to Authentication Page -->
                    <v-btn flat color="primary" @click.native="goHome()">
                        <v-icon>fa-home</v-icon>
                    </v-btn>
                </v-toolbar-items>
            </v-toolbar>
            <v-card-text style="padding-top:50px; margin-right: 35%">
                <v-container fluid>
                    <form @submit.prevent="register()">
                        <v-layout row>
                            <v-flex xs12 sm12 md4 offset-md4 lg4 offset-lg4 xl4 offset-xl4>
                                <v-text-field
                                        class="primary--text"
                                        name="name"
                                        label="نام و نام خانوادگی"
                                        data-vv-as="نام و نام خانوادگی"
                                        v-model="registerForm.name"
                                        v-validate="'required|max:255'"
                                        data-vv-name="name"
                                        :error-messages="errors.collect('name')"
                                        counter="255"
                                        prepend-icon="fa-user"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout row>
                            <v-flex xs12 sm12 md4 offset-md4 lg4 offset-lg4 xl4 offset-xl4>
                                <v-text-field
                                        class="primary--text"
                                        name="email"
                                        label="نام کاربری / ایمیل"
                                        data-vv-as="ایمیل"
                                        v-model="registerForm.username"
                                        v-validate="'required|email'"
                                        data-vv-name="email"
                                        :error-messages="errors.collect('email')"
                                        prepend-icon="email"
                                        counter="255"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout row>
                            <v-flex xs12 sm12 md4 offset-md4 lg4 offset-lg4 xl4 offset-xl4>
                                <v-text-field
                                        class="primary--text"
                                        name="password"
                                        label="رمز عبور"
                                        data-vv-as="رمز عبور"
                                        v-model="registerForm.password"
                                        :append-icon="icon"
                                        :append-icon-cb="() => (password_visible = !password_visible)"
                                        :type="!password_visible ? 'password' : 'text'"
                                        v-validate="'required|min:6|confirmed:password_confirmation'"
                                        data-vv-name="password"
                                        :error-messages="errors.collect('password')"
                                        prepend-icon="fa-key"
                                        counter="255"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-layout row>
                            <v-flex xs12 sm12 md4 offset-md4 lg4 offset-lg4 xl4 offset-xl4>
                                <v-text-field
                                        class="primary--text"
                                        name="password_confirmation"
                                        label="تکرار رمز عبور"
                                        data-vv-as="تکرار رمز عبور"
                                        v-model="registerForm.password_confirmation"
                                        :append-icon="icon"
                                        :append-icon-cb="() => (password_visible = !password_visible)"
                                        :type="!password_visible ? 'password' : 'text'"
                                        prepend-icon="fa-copy"
                                        counter="255"
                                ></v-text-field>
                            </v-flex>
                        </v-layout>
                        <v-flex xs12 sm12 md4 offset-md4 lg4 offset-lg4 xl4 offset-xl4>
                            <v-btn :loading="registerForm.busy" :disabled="errors.any()" type="submit" block
                                   :class="{primary: !registerForm.busy, error: registerForm.busy}">ثبت نام
                            </v-btn>
                            <v-btn @click.native="goToLogin()" block flat class="info--text info">
                                قبلا در سایت ثبت نام کرده اید؟ ورود به سایت
                            </v-btn>
                        </v-flex>
                    </form>
                </v-container>
            </v-card-text>
        </v-card>
    </modal-layout>
</template>

<script>
    import ModalLayout from '../layouts/ModalLayout'
    import {createNamespacedHelpers} from 'vuex'

    const {mapActions, mapGetters} = createNamespacedHelpers('auth')

    export default {
        data: () => ({
            registerForm: new AppForm(App.forms.registerForm),
            password_visible: false

        }),
        computed: {
            ...mapGetters({
                getAuth: 'getAuth'
            }),
            icon() {
                return this.password_visible ? 'visibility' : 'visibility_off'
            }
        },
        mounted() {
            let self = this
            /* Make Sure We Only Load Registration Page If Not Authenticated */
            if (self.getAuth) {
                /* nextick make sure our modal would not be visible before redirect */
                return self.$nextTick(() => self.$router.go(-1))
            }
            self.registerForm.role = 'customer'
            self.registerForm.sponsor_id = self.$store.getters['referral/getSponsor']['user_id']
        },
        methods: {
            ...mapActions({
                submit: 'register'
            }),
            goHome() {
                let self = this
                self.$nextTick(() => self.$router.push({name: 'home'}))
            },
            goToLogin() {
                let self = this
                self.$nextTick(() => self.$router.push({name: 'login'}))
            },
            redirectBack() {
                let self = this
                return self.$nextTick(() => self.$router.go(-1))
            },
            register() {
                let self = this
                self.$validator.validateAll()
                if (!self.errors.any()) {
                    self.submit(self.registerForm)
                }
            }
        },
        components: {
            ModalLayout
        }
    }
</script>
