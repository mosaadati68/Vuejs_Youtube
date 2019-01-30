<template>
    <v-carousel
            icon="crop_square"
            class="primary--text"
            style="margin-right: 20px;margin-left: 20px;width: 98%;border-radius: 10px;margin-top:150px">
        <v-carousel-item v-for="(item,i) in images" :src="item.src" :key="i">
            <div class="caption text-xs-center" style="position:relative;margin-top: 180px">
            <h3 class="white--text"> <span style="background-color:#103050;opacity:0.75;">{{ item.headline }}</span></h3>
            <p class="white--text headline" ><span style="background-color:#607D8B;opacity:0.75;">{{ item.subheader }}</span></p>
            <v-btn class="primary white--text" @click.native.prevent="goToLink(item.buttonlink)"><v-icon class="right" right dark style="margin-right: 7px">{{ item.icon }}</v-icon>{{ item.buttontext }} </v-btn>
            </div>
        </v-carousel-item>
    </v-carousel>
</template>

<script>
    import Acl from '../../mixins/acl'

    export default {
        mixins: [Acl],
        data: () => ({
            images: [
                {
                    src: '/img/parallax1.jpeg',
                    headline: 'مجموعه سه عددی چمدان ایگل',
                    'subheader': 'از انواع مختلفی از بهداشت و محصولات ارگانیک انتخاب کنید',
                    'buttontext': 'مشاهده تمام محصولات',
                    'buttonlink': '/products',
                    'icon': 'shopping_basket'
                },
                {
                    src: '/img/parallax2.jpeg',
                    headline: 'لپ تاپ 15 اینچی ایسوس مدل VivoBook X541NA - E',
                    'subheader': 'شروع به عنوان تنها به عنوان P73،600 تنها!',
                    'buttontext': 'اکنون یک فرانچایز باشید',
                    'buttonlink': '/categories/food-cart',
                    'icon': 'store_mall_directory'
                },
                {
                    src: '/img/parallax3.jpeg',
                    headline: 'آیا می خواهید محصولات خود را بفروشید؟',
                    'subheader': 'کتاب گام به گام دروس طلایی هشتم متوسطه کاگو',
                    'buttontext': 'یک نماینده فروش باشید',
                    'buttonlink': '/register',
                    'icon': 'person_pin'
                },
                {
                    src: '/img/parallax4.jpeg',
                    headline: 'علاقه مند هستید اما هنوز تصمیم نگرفته اید؟',
                    'subheader': 'خدمات مشتری ما برای سوالات شما باز است',
                    'buttontext': 'تماس با ما\n',
                    'buttonlink': '/support',
                    'icon': 'textsms'
                }
            ]
        }),
        methods: {
            goToLink(link) {
                this.$router.push({path: link})
            }
        },
        mounted() {
            let self = this
            if (self.isLoggedIn()) {
                self.images.forEach(image => {
                    if (image.buttonlink === '/register') {
                        image.buttonlink = '/dashboard'
                    }
                })
            }
        }
    }
</script>

<style>

</style>
