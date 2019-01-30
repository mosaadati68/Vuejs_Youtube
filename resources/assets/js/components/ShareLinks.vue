<template>
    <v-layout column>
        <v-flex>
            <v-tooltip left>
                <v-btn fab style="z-index: 0"
                       slot="activator"
                       dark small color="primary">
                    <v-icon dark>favorite_border</v-icon>
                </v-btn>
                <span>افزودن به علاقه مندی</span>
            </v-tooltip>
        </v-flex>
        <v-flex>
            <v-dialog
                    v-model="dialog"
                    width="500"
            >
                <!--<v-tooltip left>-->
                <v-btn fab dark slot="activator" small color="primary" style="z-index:0">
                    <v-icon dark>share</v-icon>
                </v-btn>
                <!--<span>اشتراک گذاری</span>-->
                <!--</v-tooltip>-->
                <v-card style="border-radius: 5px">
                    <v-card-title
                            class="headline grey lighten-1"
                            primary-title
                    >
                        اشتراک گذاری
                    </v-card-title>

                    <v-card-text >
                        <v-layout column>
                            <v-flex xs12 sm12 md12>
                                <p class="subheading">اشتراک گذاری در شبکه های اجتماعی</p>
                                <v-tooltip bottom>
                                    <v-btn fab dark slot="activator" small color="primary" style="z-index: 0">
                                        <v-icon dark>fa-google-plus</v-icon>
                                    </v-btn>
                                    <span>گوگل پلاس</span>
                                </v-tooltip>
                                <v-tooltip bottom>
                                    <v-btn fab dark slot="activator" small color="primary" style="z-index: 0">
                                        <v-icon dark>fa-facebook</v-icon>
                                    </v-btn>
                                    <span>فیس بوک</span>
                                </v-tooltip>
                                <v-tooltip bottom>
                                    <v-btn fab dark slot="activator" small color="primary" style="z-index: 0">
                                        <v-icon dark>fa-twitter</v-icon>
                                    </v-btn>
                                    <span>تویتر</span>
                                </v-tooltip>
                            </v-flex>
                            <v-flex  class="black--text">
                                <v-text-field
                                        box dark
                                        label=" آدرس ایمیل را وارد نمایید ..."
                                        append-icon="email"
                                        hint="ارسال ایمیل"
                                        persistent-hint
                                ></v-text-field>
                                <v-btn
                                        :loading="loadingBotton"
                                        @click.native="loader = 'loadingBotton'"
                                        :disabled="loadingBotton"
                                        class="white--text left"
                                        large
                                        color="primary">
                                    ارسال
                                </v-btn>
                            </v-flex>
                        </v-layout>
                    </v-card-text>

                    <v-divider></v-divider>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn
                                style="z-index: 0"
                                color="primary"
                                flat
                                @click="dialog = false"
                        >
                            بستن
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-flex>
        <v-flex>
            <v-tooltip left>
                <v-btn fab dark slot="activator" small color="primary" style="z-index: 0">
                    <v-icon dark>compare</v-icon>
                </v-btn>
                <span>مقایسه</span>
            </v-tooltip>
        </v-flex>
        <v-flex>
            <v-tooltip left>
                <v-btn fab dark slot="activator" small color="primary" style="z-index: 0">
                    <v-icon dark>fa-line-chart</v-icon>
                </v-btn>
                <span>نمودار قیمت</span>
            </v-tooltip>
        </v-flex>
    </v-layout>
</template>
<script>
    export default {
        data() {
            return {
                dialog: false,
                loadingBotton: false,
            }
        },
        watch: {
        loader () {
            const l = this.loader
            this[l] = !this[l]
            setTimeout(() => (this[l] = false), 3000)
            this.loader = null
        }
    },
    }
</script>