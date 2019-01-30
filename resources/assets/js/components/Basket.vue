<template>
    <v-container fluid>
        <v-layout row justify-space-between class="mt-5">
            <v-flex xs12 sm9 class="ml-4">
                <v-card>
                    <v-card-title primary-title>
                        <v-container fluid>

                            <v-card-title>

                                <v-tooltip top>
                                    <v-btn flat icon color="red lighten-2" slot="activator" @click="emptyCart()"
                                           v-if="count > 0">
                                        <v-icon>remove_shopping_cart</v-icon>
                                    </v-btn>
                                    <span>Empty Cart</span>
                                </v-tooltip>

                                <v-text-field
                                        v-if="items.length > 0"
                                        append-icon="search"
                                        label="جستجو در سبد خرید"
                                        single-line
                                        v-model="search"
                                ></v-text-field>

                            </v-card-title>

                            <v-data-table
                                    :headers="headers"
                                    :items="items"
                                    :search="search"
                                    v-model="selected"
                                    selected-key="id"
                                    select-all
                            >
                                <template slot="items" scope="props">
                                    <td>
                                        <v-checkbox
                                                color="primary"
                                                hide-details
                                                v-model="props.selected"
                                        >
                                        </v-checkbox>
                                    </td>
                                    <td class="title text-xs-left primary--text">{{ props.item.name }}
                                        <span v-if="props.item.options !== {}">
                        <span class="info--text caption" v-for="(option,key) in props.item.options"
                              :key="key">({{ option }})</span>
                    </span>
                                    </td>
                                    <td class="title text-xs-left primary--text">{{ props.item.qty }}</td>
                                    <td class="title text-xs-left primary--text">{{ props.item.price }} ریال</td>
                                    <td class="title text-xs-left primary--text">{{ props.item.subtotal }} ریال</td>
                                    <td class="title text-xs-center">

                                        <v-edit-dialog
                                                @open="tmp = props.item"
                                                @save="updateCartItem(tmp)"
                                                large
                                                lazy
                                        >
                                            <v-btn flat color="teal lighten-2">
                                                <v-icon>fa-edit</v-icon>
                                            </v-btn>
                                            <div slot="input" class="mt-3 text-xs-center title primary--text">
                                                بروزرسانی تعداد
                                            </div>

                                            <v-text-field
                                                    slot="input"
                                                    label="Edit"
                                                    v-model="tmp.qty"
                                                    single-line
                                                    counter
                                                    autofocus
                                                    :rules="[maxCount]"
                                            >
                                            </v-text-field>

                                        </v-edit-dialog>

                                    </td>
                                    <td class="title text-xs-center">
                                        <v-btn flat icon color="red lighten-2"
                                               @click.native="removeFromCart(props.item.id)">
                                            <v-icon>delete_forever</v-icon>
                                        </v-btn>
                                    </td>

                                </template>

                                <template slot="pageText" scope="{ pageStart, pageStop }">
                                    From {{ pageStart }} to {{ pageStop }}
                                </template>

                            </v-data-table>

                        </v-container>
                    </v-card-title>
                </v-card>
            </v-flex>
            <v-flex xs12 sm3>
                <v-card>
                    <v-card-title primary-title>
                        <v-container fluid>
                            <v-flex xs12 class="text-xs-right c-checkout-summary">
                                <div label class="white title c-checkout-summary__text">
                                    <v-layout row justify-space-between>
                                        <v-flex xs12 sm6>
                                            <v-icon left class="ml-2">fa-percent</v-icon>
                                            ارزش افزوده
                                        </v-flex>
                                        <v-flex xs12 sm6>
                                            {{ tax }} ریال
                                        </v-flex>
                                    </v-layout>
                                </div>
                            </v-flex>
                            <v-flex xs12 class="text-xs-right c-checkout-summary">
                                <div label class="white title c-checkout-summary__text">
                                    <v-layout row justify-space-between>
                                        <v-flex xs12 sm6>
                                            <v-icon left class="ml-2">shopping_basket</v-icon>
                                            جمع مبلغ
                                        </v-flex>
                                        <v-flex xs12 sm6>
                                            {{ subtotal }} ریال
                                        </v-flex>
                                    </v-layout>
                                </div>
                            </v-flex>
                            <v-flex xs12 class="text-xs-right">
                                <div label class="white title c-checkout-summary__text">
                                    <v-layout row justify-space-between>
                                        <v-flex xs12 sm6>
                                            <v-icon left class="ml-2">fa-money</v-icon>
                                            جمع مبلغ کل
                                        </v-flex>
                                        <v-flex xs12 sm6>
                                            {{ total }} ریال
                                        </v-flex>
                                    </v-layout>
                                </div>
                            </v-flex>
                            <div class="c-checkout-summary__devider"></div>
                            <v-flex xs12 class="text-xs-right">
                                <div label class="white caption c-checkout-summary__alert">
                                    <v-layout row justify-space-between>
                                        <v-flex xs12 sm12>
                                            کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.
                                            <v-tooltip bottom >
                                                <v-icon
                                                        slot="activator"
                                                        color="grey"
                                                        lazy
                                                        max-width=300
                                                >help
                                                </v-icon>
                                                <span class="c-checkout-summary__tooltip">
            محصولات موجود در سبد خرید شما تنها در صورت ثبت و پرداخت سفارش برای شما رزرو می‌شوند. در صورت عدم ثبت سفارش، دیجی‌کالا هیچگونه مسئولیتی در قبال تغییر قیمت یا موجودی این کالاها ندارد.
                                                        </span>
                                            </v-tooltip>
                                        </v-flex>
                                    </v-layout>
                                </div>
                            </v-flex>
                        </v-container>
                    </v-card-title>
                </v-card>
            </v-flex>
        </v-layout>
        <v-layout row justify-space-between class="mt-5">
        </v-layout>
    </v-container>
</template>
<script>
    import {createNamespacedHelpers} from 'vuex'

    const {mapActions, mapGetters} = createNamespacedHelpers('cart')

    export default {
        data() {
            return {
                currency: '₱',
                /* Table Specific */
                search: '',
                selected: [],
                headers: [
                    {text: 'نام محصول', value: 'name', align: 'left', sortable: true},
                    {text: 'تعداد', value: 'qty', align: 'left', sortable: true},
                    {text: 'قیمت واحد', value: 'price', align: 'left', sortable: true},
                    {text: 'جمع کل', value: 'subtotal', align: 'left', sortable: true},
                    {text: 'بروزرسانی', align: 'center', sortable: false},
                    {text: 'حذف', align: 'center', sortable: false}
                ],
                /* Cart Specific */
                items: [],
                tax: 0,
                subtotal: 0,
                total: 0,
                count: 0,
                maxCount: (v) => parseInt(v) <= 999 || 'Max Qty is 999',
                /* current updated item */
                tmp: ''
            }
        },
        computed: {
            ...mapGetters({
                getItems: 'getItems',
                getTax: 'getTax',
                getSubTotal: 'getSubTotal',
                getTotal: 'getTotal',
                getCount: 'getCount'
            }),
            avatarSize() {
                return `${this.size}px`
            },
            isDark() {
                return this.dark === true
            }
        },
        mounted() {
            let self = this
            self.items = Object.values(self.getItems)
            self.selected = self.items
            self.tax = self.getTax
            self.subtotal = self.getSubTotal
            self.total = self.getTotal
            self.count = self.getCount
        },
        methods: {
            ...mapActions({
                removeItem: 'removeItem', /* params: product.id , request: rowId */
                destroyCart: 'destroyCart',
                updateItem: 'updateItem' /* params: product.id and product.qty, request: rowId and qty */
            }),
            updateCartItem(tmp) {
                if (tmp.qty > 999) {
                    tmp.qty = 999
                }
                let payload = {qty: tmp.qty, rowId: tmp.rowId}

                this.updateItem(payload)
            },
            emptyCart() {
                let self = this
                self.destroyCart()
            },
            removeFromCart(id) {
                let self = this
                self.removeItem(id)
            },
            closeCart() {
                Bus.$emit('close-cart')
            }
        },
        watch: {
            getTax(newValue) {
                let self = this
                self.tax = newValue
            },
            getCount(newValue) {
                let self = this
                self.count = newValue
            },
            getItems(newValue) {
                let self = this
                self.items = Object.values(newValue)
            },
            getSubTotal(newValue) {
                let self = this
                self.subtotal = newValue
            },
            getTotal(newValue) {
                let self = this
                self.total = newValue
            }
        }
    }
</script>
