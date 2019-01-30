<template>
    <v-footer :class="[footerClass]">
        <v-layout column align-center justify-center fill-height class="mt-3 mb-3">
            <v-flex class="align-center">
                <span>© {{ year }} {{ domain }} ® | {{ trademark }}™</span>
            </v-flex>
            <v-flex>
                <span>استفاده از مطالب فروشگاه اینترنتی ------ فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به فروشگاه آنلاین ----- می‌باشد.</span>
            </v-flex>
        </v-layout>
    </v-footer>
</template>

<script>
    import Theme from '../mixins/theme'
    import VLink from '../components/VLink.vue'

    export default {
        mixins: [Theme],
        data: () => ({
            footerClass: {'primary--text': true}
        }),
        created() {
            /* Emit On a Child Component If You Want This To Be Visible */
            Bus.$on('footer-content-visible', (visibility) => {
                this.contentVisible = visibility
            })
        },
        components: {
            VLink
        }
    }
</script>

<style>

</style>
