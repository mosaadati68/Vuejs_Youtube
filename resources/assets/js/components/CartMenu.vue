<template>
    <v-layout row>
        <v-flex xs12>
            <v-card flat>
                <v-toolbar color="mt-0" style="background-color: rgba(16, 54, 86, 0.92);" flat>
                    <v-toolbar-title class="title white--text text--darken-3 mr-3">مبلغ کل خرید : {{ total }} ریال</v-toolbar-title>
                    <v-spacer></v-spacer>
                    <v-btn flat class="title white--text text--darken-3" @click="openCart()">مشاهده سبد خرید</v-btn>
                </v-toolbar>

                <v-list three-line style="background-color: rgba(16, 54, 86, 0.92);">
                    <ul style="margin-right: 15px">
                        <li v-for="(item,index) in items">
                            <v-layout column>
                                <v-flex>
                                    <v-list-tile-avatar>
                                        <img :src="item.avatar"
                                             style="width: 60px;height: 60px;border-radius:3px; margin-top: 10px">
                                    </v-list-tile-avatar>
                                </v-flex>
                                <v-flex class="mr-5">
                                    <v-layout column style="margin-top: -35px">
                                        <v-flex>
                                            <v-list-tile-content class="mr-5">
                                                <v-list-tile-title v-html="item.name"
                                                                   class="white--text text--darken-2"></v-list-tile-title>
                                                <v-list-tile-sub-title v-html="item.name"
                                                                       class="white--text text--darken-2"></v-list-tile-sub-title>
                                            </v-list-tile-content>
                                        </v-flex>
                                        <v-flex>
                                            <v-list-tile-action class="mr-5">
                                                <v-layout row>
                                                    <v-flex xs12 sm2>
                                                        <v-list-tile-action-text>تعداد : {{ item.qty }}
                                                        </v-list-tile-action-text>
                                                    </v-flex>
                                                    <v-flex xs12 sm10>
                                                        <v-icon
                                                                v-if="selected.indexOf(index) < 0"
                                                                color="grey lighten-1"
                                                        >
                                                            star_border
                                                        </v-icon>
                                                        <v-icon
                                                                v-else
                                                                color="yellow darken-2"
                                                        >
                                                            star
                                                        </v-icon>
                                                    </v-flex>
                                                </v-layout>
                                            </v-list-tile-action>
                                        </v-flex>
                                    </v-layout>
                                </v-flex>
                            </v-layout>
                        </li>
                    </ul>
                </v-list>
            </v-card>
        </v-flex>
    </v-layout>
</template>
<script>
    import { createNamespacedHelpers } from 'vuex'
    const { mapActions, mapGetters } = createNamespacedHelpers('cart')
    export default {
        data() {
            return {
                header: 'لیست سبد خرید',
                selected: [2],
                items: [],
                tax: 0,
                subtotal: 0,
                total: 0,
                count: 0,
            }
        },
        computed: {
            ...mapGetters({
                getItems: 'getItems',
                getTax: 'getTax',
                getSubTotal: 'getSubTotal',
                getTotal: 'getTotal',
                getCount: 'getCount'
            })
        },
        mounted(){
            let self = this
            self.items = Object.values(self.getItems)
            console.log(self.items);
            self.tax = self.getTax
            self.subtotal = self.getSubTotal
            self.total = self.getTotal
            self.count = self.getCount
            self.selected = self.items
        },
        methods: {
            toggle(index) {
                const i = this.selected.indexOf(index)

                if (i > -1) {
                    this.selected.splice(i, 1)
                } else {
                    this.selected.push(index)
                }
            },
            /* Uses Cart Route */
            openCart() {
                let self = this
                self.$router.push({name: 'cart'})
            }
        }
    }
</script>
