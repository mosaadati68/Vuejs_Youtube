<template>
    <v-app :dark="App.theme.dark" standalone v-cloak>
    <!--<v-app :dark="App.theme.dark" standalone v-cloak v-scroll="onScroll">-->
        <!--<left-side-bar></left-side-bar>-->
        <!--<app-nav-bar id="toolBar" style="transition: top 0.8s;top:0; display: block;"></app-nav-bar>-->
        <main>
            <!-- added fluid and pa-0 ma-0 for full screen pages -->
            <v-container transition="slide-x-transition" fluid class="pa-0 ma-0">
                <slot></slot>
            </v-container>
        </main>
        <!--<shopping-cart></shopping-cart>-->
        <!--<fab-button></fab-button>-->
        <!--<cookie-law></cookie-law>-->
        <!--<app-footer></app-footer>-->
    </v-app>
</template>

<script>
    // import AppFooter from '../partials/AppFooter.vue'
    // import AppNavBar from '../partials/AppNavBar.vue'
    // import LeftSideBar from '../partials/LeftSideBar.vue'
    // import FabButton from '../components/FabButton.vue'
    // import CookieLaw from '../partials/CookieLaw.vue'
    // import HalfCircleSpinner from "../../../../node_modules/epic-spinners/src/components/lib/HalfCircleSpinner.vue";
//    import ShoppingCart from '../partials/ShoppingCart.vue'

    export default {
        // data: () => ({
        //     loading: true,
        //     prevScrollpos: window.pageYOffset,
        // }),
        // methods: {
        //     onScroll(e) {
        //         let currentScrollPos = window.pageYOffset;
        //         if (this.prevScrollpos > currentScrollPos) {
        //             document.getElementById("toolBar").style.top = "0";
        //         } else {
        //             document.getElementById("toolBar").style.top = "-60px";
        //         }
        //         this.prevScrollpos = currentScrollPos;
        //     }
        // },
        // components: {
        //     HalfCircleSpinner,
        //     AppFooter,
        //     AppNavBar,
        //     LeftSideBar,
        //     FabButton,
        //     CookieLaw,
        //     // ShoppingCart
        // }
    }
</script>
