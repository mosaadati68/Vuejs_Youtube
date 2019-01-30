<template>
    <main-layout :class="[contentClass]" :style="{ paddingTop: `150px` }">
    <v-container  fluid>
      <v-layout row wrap>
        <v-flex xs12>
            <h3 class="primary--text">از خرید شما کمال تشکر را داریم</h3>

            <h5 class="info--text">دستورالعمل نحوه پرداخت و تسویه حساب</h5>

            <h5 class="info--text">فاکتور خرید شما به ایمیل ثبت شده شما ارسال شد</h5>
        </v-flex>
        <v-flex md4 offset-md4 style="margin-right: 35%">
            <v-card-actions>
            <v-btn center @click.native="goTo('/dashboard')" block flat class="primary--text primary">مشاهده سفارشات <v-icon right dark class="mr-2">fa-cubes</v-icon></v-btn>
            <v-btn center @click.native="goTo('/products')" block flat class="info--text info">ادامه خرید <v-icon right dark class="mr-2">fa-shopping-bag</v-icon></v-btn>
            </v-card-actions>
        </v-flex>
      </v-layout>
    </v-container>
 </main-layout>
</template>

<script>
import MainLayout from '../layouts/Main.vue'
import Theme from '../mixins/theme'

export default {
    mixins: [Theme],
    data: () => ({
        contentClass: { 'grey': true, 'lighten-4': true, 'accent--text': true, 'text-xs-center': true }
    }),
    components: {
        MainLayout
    },
    methods: {
        goTo (route) {
            let self = this
            self.$router.push({path: route})
        }
    }

}
</script>

<style>

</style>
