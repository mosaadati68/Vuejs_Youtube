<template>
    <v-toolbar app :style="navbarStyle" :dark="!isDark" fixed>
        <!-- center logo -->
        <img v-if="showLogo" class="hidden-md-and-up" :src="logo" :style="[logoStyle]" alt="vuejs">
        <v-toolbar-side-icon :style="toggleBarStyle" @click.native.stop="toggleDrawer()"></v-toolbar-side-icon>
        <!-- Add Here All Your Nav Icons -->
        <div class="text-xs-center">
            <v-menu :close-on-content-click="false"
                    :nudge-width="300"
                    offset-y
                    bottom
                    left
                    open-on-hover>
                <v-btn flat icon color="primary" slot="activator">
                    <v-badge right>
                        <span slot="badge">{{ count }}</span>
                        <v-icon>shopping_cart</v-icon>
                    </v-badge>
                </v-btn>
                <v-list style="border-radius: 5px; background-color: rgba(16, 54, 86, 0.92);">
                    <cart-menu></cart-menu>
                </v-list>
            </v-menu>
        </div>
        <v-menu :close-on-content-click="false"
                v-show="$store.state.auth.access_token"
                :nudge-width="300"
                offset-y
                bottom
                left
                open-on-hover>
            <v-avatar slot="activator">
                <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John">
            </v-avatar>
            <v-list style="border-radius: 5px; background-color: rgba(16, 54, 86,1);">
                <v-list-tile v-for="(item, index) in items" :key="index"
                             @click=""
                >
                    <v-btn flat :href="item.href">{{item.title}}</v-btn>
                </v-list-tile>
            </v-list>
        </v-menu>

        <v-toolbar-items>
            <v-btn flat :href="'/'">صفحه اصلی</v-btn>
            <v-btn flat :href="'/products'">محصولات</v-btn>
            <v-btn flat :href="'/support'" >تماس با ما</v-btn>
            <v-btn flat :href="'/about'">درباره ما</v-btn>
        </v-toolbar-items>
        <div v-show="!$store.state.auth.access_token">
            <v-btn flat style="margin-left:-22px;" :href="'/login'" >ورود</v-btn>/<v-btn flat style="margin-right:-10px" :href="'/register'">ثبت نام</v-btn>
        </div>

        <v-spacer></v-spacer>
        <!-- Title -->
        <v-toolbar-title v-if="extension" class="text-xs-center" slot="extension">
            <v-icon :style="{color: iconColor }" class="ml-3 hidden-md-and-down" v-if="showIcon">{{ icon }}</v-icon>
            <span class="hidden-md-a=" hidden-md-annd-down :style="titleStyle">{{ title }}</span>
            <!--<span classd-down" :style="titleStyle">{{ title }}</span>-->
        </v-toolbar-title>
        <v-toolbar-title v-else class="text-xs-center">
            <v-avatar v-if="!showIcon" size="50px" slot="activator" class="hidden-sm-and-down">
                <img :src="`${App.site.logo.url}`" alt="">
            </v-avatar>
            <v-icon :style="{color: iconColor }" class="ml-3 hidden-sm-and-down" v-else>{{ icon }}</v-icon>
            <span class="hidden-sm-and-down" :style="titleStyle">{{ title }}</span>
        </v-toolbar-title>
        <v-toolbar-title class="black--text" slot="extension" style="width: 700px;">
            <v-text-field style="color: #0e4377"
                          label="جستجو ..."
                          append-icon="search"
                          outline
            ></v-text-field>
        </v-toolbar-title>
    </v-toolbar>
</template>

<script>
    import Theme from '../mixins/theme'
    import CartMenu from '../components/CartMenu.vue'

    import {createNamespacedHelpers} from 'vuex'

    const {mapState} = createNamespacedHelpers('cart')

    export default {
        mixins: [Theme],
        data: () => ({
            extension: false,
            count: 0,
            items: [
                {title: 'پروفایل',icon:'person' , href:'/settings'},
                {title: 'سفارش های من',href:'/dashboard'},
                {title: 'خروج از حساب کاربری',href:'/logout'}
            ]
        }),
        computed: {
            ...mapState({
                getCount: 'count'
            })
        },
        created() {
            /* Emit On a Child Component If You Want This To Be Visible */
            Bus.$on('header-extension-visible', (visibility) => {
                this.extension = visibility
            })
        },
        mounted() {
            let self = this
            self.count = self.getCount
        },
        methods: {
            /* Use Vuetify Modal */
            openShoppingCart() {
                Bus.$emit('shopping-cart-open')
            },
            toggleDrawer() {
                Bus.$emit('toggleDrawer')
            },
        },
        watch: {
            getCount(newValue) {
                let self = this
                self.count = newValue
            }
        },
        components: {
            CartMenu
        }
    }
</script>

<style>

</style>