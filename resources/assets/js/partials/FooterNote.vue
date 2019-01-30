<template>
    <v-container fluid class="pa-0 ma-0" :class="[contentClass]">
        <v-layout
                align-center
                justify-center
                fill-height
                column
                wrap
                style="background-color: rgba(16,54,86,0.92)"
        >

            <v-flex>
                <v-btn
                        v-for="link in links"
                        :key="link"
                        color="white"
                        flat
                        round
                        class="subheading"
                >
                    {{ link }}
                </v-btn>
            </v-flex>
            <v-flex class="pl-5 pr-5 pt-5 pb-5">
                <v-layout align-center
                          justify-center
                          fill-height
                          row
                          wrap>
                    <v-flex xs12 sm12 md8 lg8 x12>
                        <v-subheader class="headline primary--text align-center">
                            فروشگاه اینترنتی بامیلو
                        </v-subheader>
                        <span class="subheading white--text">
                  فروشگاه اینترنتی بامیلو ، بهترین مقصد برای خرید اینترنتی شما در ایران است. تمامی ایرانیان می توانند کالاهای الکترونیک ، کتاب ، وسایل خانه ، کالاهای مد و لباس ، کیف و کفش ، موبایل ، تبلت و هزاران کالای متنوع را به صورت آنلاین خریداری کنند و به آسانی تحویل بگیرند. بامیلو با پیاده سازی روش های پرداخت متنوع امکان خرید را در هر زمان و مکانی با شرایط ساده فراهم کرده است. بامیلو با شرایط خرید متنوع و تحویل فوری تجربه خرید اینترنتی از برندهای معتبر زارا ، بوش شامل یخچال و فریزر بوش و ماشین لباسشویی بوش ، گپ ، کانیراش ، سله بن و چندین برند معتبر دیگر در بخش کالاهای مد و لباس به همراه امکان انتخاب برندهای جهانی و لوکس متنوع ، استایل های مدرن و شیکی را به سادگی برای شما فراهم می سازد. در بامیلو خرید کالاهای زیبایی و سلامت از میان برند های کالاهای زیبایی و سلامت آرایشی و بهداشتی به شما کمک خواهد کرد تا به سادگی پیرایش و آرایش خود را با هر سلیقه ای فراهم کنید . در هر کجا می توانید خوش قیمت ترین و جدیدترین موبایل شامل گوشی اپل ، گوشی سامسونگ ، گوشی ال جی و تبلت را در بامیلو خریداری کنید . کالاهای شرکت اپل و خانواده آیفون شامل آیفون 8 , آیفون X یا همان 10 و آیپد با بهترین قیمت در بامیلو برای خرید در دسترس شماست. بهترین کالاهای برند سامسونگ و ال جی در کنار تبلت‌های خوش قیمت لنوو و ایسوز انتخاب‌های متنوعی را در بامیلو فراهم کرده است. علاوه بر مد و لباس و لوازم جانبی الکترونیک ، دسترسی به بهترین برندهای لوازم منزل و آشپزخانه مانند ایکیا ، فیلیپس و پاناسونیک امکان تجهیز خانه و محل کار شما را به آسانی فراهم می‌کند. علاوه بر لوازم منزل ، تجهیزات اداری ، پرینتر و لوازم دفتری و نوشت‌افزار برای انواع سلیقه ها در بامیلو در دسترس است.
            تمامی کالاها و خدمات حسب مورد دارای مجوز های لازم از مراجع مربوطه می باشند و فعالیتهای این سایت تابع قوانین و مقررات جمهوری اسلامی ایران می باشد.
            </span>
                    </v-flex>
                    <v-flex>
                        <v-layout
                                align-end
                                justify-center
                                column
                        >
                            <v-flex xs12 sm12 md12 lg12 x12>
<span class="headline primary--text">
                                    از تخفیف‌ها و جدیدترین‌های شیک پوشان باخبر شوید:
                                </span>
                                <v-layout align-center
                                          justify-center
                                          row>
                                    <v-flex xs9 sm19 md9>
                                        <v-text-field
                                                box dark
                                                label=" آدرس ایمیل را وارد نمایید ..."
                                                append-icon="email"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs3 sm3 md3>
                                        <v-btn style="border-radius: 3px; margin-left: 5px; height: 57px;margin-top: 0px;"
                                               class="white--text left"
                                               large
                                               color="primary"
                                        >
                                            ارسال
                                            <v-icon right class="mr-2" style="transform: rotate(180deg)">send</v-icon>
                                        </v-btn>
                                    </v-flex>
                                </v-layout>
                            </v-flex>
                            <v-flex xs12 sm12 md12 lg12 x12 style="margin-top: 120px">
                                <img data-u="image" src="/img/namad.png" width="150" height="150"/>
                                <img data-u="image" src="/img/neshan.png" width="150" height="150"/>
                                <!--<script src="https://www.zarinpal.com/webservice/TrustCode" type="text/javascript"></script>-->
                            </v-flex>
                        </v-layout>


                    </v-flex>
                </v-layout>

            </v-flex>
        </v-layout>
        <v-layout row wrap class="mt-5">
            <v-flex xs12 sm12 md3 lg3 xl3>
                <v-subheader class="headline primary--text">
                    محصولات
                </v-subheader>
                <v-list dense :class="[contentClass]">
                    <v-link v-for="(product,key) in products" :key="key" :title="toProperCase(product.name)"
                            :href="`/products/${product.slug}`"></v-link>
                </v-list>
            </v-flex>
            <v-flex xs12 sm12 md3 lg3 xl3>
                <v-subheader class="headline primary--text">خدمات مشتریان</v-subheader>
                <v-list dense :class="[contentClass]">
                    <v-link v-for="(foodcart,key) in foodcarts" :key="key" :title="toProperCase(foodcart.name)"
                            :href="`/products/${foodcart.slug}`"></v-link>
                </v-list>
            </v-flex>
            <v-flex xs12 sm12 md3 lg3 xl3>
                <v-subheader class="headline primary--text">نمایندگی های فروش</v-subheader>
                <v-list dense :class="[contentClass]">
                    <v-link
                            v-for="(value,key,index) in social_links" :key="key" :index="index"
                            :title="toProperCase(key)" :href="value"
                    >
                    </v-link>
                </v-list>
            </v-flex>
            <v-flex xs12 sm12 md3 lg3 xl3>
                <v-subheader class="headline primary--text">اطلاع رسانی</v-subheader>
                <v-list class="accent">
                    <v-list-tile v-for="(value,key,index) in contact_details" :key="key" :index="index">
                        <v-list-tile-content>
                            <v-list-tile-title class="caption">{{ toProperCase(key) }}: {{ toProperCase(value) }}
                            </v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-flex>
        </v-layout>
    </v-container>

</template>

<script>
    import VLink from '../components/VLink.vue'

    export default {
        data: () => ({
            contentClass: {'accent': true},
            contact_details: App.sponsor.contact_details,
            social_links: App.sponsor.social_links,
            products: [],
            foodcarts: [],
            links: [
                'صفحه اصلی',
                'فروشندگان',
                'محصولات',
                'فروش ویژه',
                'درباره ما',
                'تماس با ما'
            ]
        }),
        components: {
            VLink
        },
        mounted() {
            this.getFoodCart()
            this.getSupplements()
        },
        methods: {
            toProperCase(key) {
                let newStr = key.replace(/_/g, ' ')
                return newStr.replace(/\w\S*/g, function (txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase()
                })
            },
            getFoodCart() {
                let self = this
                axios.get(route('api.product.getFeaturedProducts', {slug: 'food-cart'})).then((response) => {
                    self.foodcarts = response.data
                })
            },
            getSupplements() {
                let self = this
                axios.get(route('api.product.getFeaturedProducts', {slug: 'supplements'})).then((response) => {
                    self.products = response.data
                })
            }
        }

    }
</script>

<style>

</style>
