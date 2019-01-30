<template>
    <v-container fluid>
    </v-container>
</template>

<script>
    import { createNamespacedHelpers } from 'vuex'
    const { mapState, mapMutations } = createNamespacedHelpers('checkout')

    export default {
        computed: {
            ...mapState({
                customer_details: state => state.customer_details
            }),
            current: {
                get () {
                    return this.$store.getters['wizard/getCurrent']
                },
                set (value) {
                    this.$store.commit('wizard/setCurrent', value)
                }
            },
            step: {
                get () {
                    return this.$store.getters['wizard/getStep']
                },
                set (value) {
                    this.$store.commit('wizard/setStep', value)
                }
            },

            next: {
                get () {
                    return this.$store.getters['wizard/getNext']
                },
                set (value) {
                    this.$store.commit('wizard/setNext', value)
                }
            },
            previous: {
                get () {
                    return this.$store.getters['wizard/getPrevious']
                },
                set (value) {
                    this.$store.commit('wizard/setPrevious', value)
                }
            }

        },
        methods: {
            ...mapMutations([
                'setCustomerDetails'
            ]),
            forward () {
                let self = this
                self.$validator.validateAll()
                self.setValidated()
                self.$store.dispatch('wizard/move', this.next)
                self.setCustomerDetails(self.customer_details)
            },
            setValidated () {
                if (!this.errors.any()) {
                    this.current.validated = true
                } else {
                    this.current.validated = false
                }
                this.$store.commit('wizard/setStepValidated', this.current)
            },
            viewCart () {
                let self = this
                return self.$nextTick(() => self.$router.push({ name: 'cart' }))
            }
        }
    }
</script>

<style>

</style>
