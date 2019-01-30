<template>
    <modal-layout>
        <v-toolbar class="accent" slot="toolbar">
            <v-btn flat icon color="primary" @click.native="redirectBack()">
                <v-icon>arrow_back</v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <v-toolbar-title class="text-xs-center primary--text">سبد خرید در فروشگاه</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <!-- If There is no User Account Login Yet Redirect to Authentication Page -->
                <v-btn color="success" flat @click.native="checkout()" v-if="count > 0">
                    <v-icon right>payment</v-icon>
                    ادامه ثبت سفارش
                </v-btn>
                <v-btn flat color="primary" @click.native="close()" v-else>بستن</v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <basket></basket>
        <div style="width: 600px; height: 800px; border-radius: 10px">
            <vue-dropzone id="drop1" url="/users/uploadavatar"
                          v-bind:dropzone-options="dropzoneOptions"
                          v-bind:use-custom-dropzone-options="true">
            </vue-dropzone>
        </div>
    </modal-layout>
</template>
<script>
    import ModalLayout from '../layouts/ModalLayout'
    import Basket from './Basket.vue'
    import vueDropzone from "vue2-dropzone";
    import {createNamespacedHelpers} from 'vuex'

    const {mapGetters} = createNamespacedHelpers('cart')

    export default {
        data: () => ({
            count: 0,
            dropzoneOptions: {
                uploadMultiple: true,
                parallelUploads: 1000,
                thumbnailWidth: 800,
                thumbnailHeight: 300,
            },
            language: {
                dictDefaultMessage: 'Hi'
            }
        }),
        computed: {
            ...mapGetters({
                getCount: 'getCount'
            }),
            isDark() {
                return this.dark === true
            }
        },
        components: {
            ModalLayout,
            Basket,
            vueDropzone
        },
        mounted() {
            let self = this
            self.count = self.getCount
        },
        methods: {
            redirectBack() {
                let self = this
                self.$router.push({path: self.$store.state.route.from.fullPath})
            },
            close() {
                let self = this
                self.$router.push({path: '/'})
            },
            checkout() {
                let self = this
                return self.$nextTick(() => self.$router.push({name: 'checkout'}))
            }
        },
        watch: {
            getCount(newValue) {
                let self = this
                self.count = newValue
            }
        }
    }
</script>
