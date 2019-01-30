<template>
<div>
    <v-layout row wrap align-center>
        <v-flex xs12 text-xs-right>
        <h5 class="primary--text">
        کل سفارشات: {{ total }}
        </h5>
        </v-flex>
    </v-layout>
    <v-layout row wrap align-center>
    <!-- make a card to display this -->
    <v-flex xs12 md4 text-xs-center>
        <v-card color="blue-grey" class="ma-1" height="110px">
            <v-card-text class="title pa-5">
                <v-icon large color="amber lighten-2">confirmation_number</v-icon> پرداخت نشده: {{ unpaid }}
            </v-card-text>
        </v-card>
    </v-flex>
    <v-flex xs12 md4 text-xs-center>
        <v-card color="red lighten-2" class="ma-1" height="110px">
            <v-card-text class="title pa-5">
                <v-icon large color="red darken-4">do_not_disturb</v-icon> در انتظار: {{ unsent }}
            </v-card-text>
        </v-card>
    </v-flex>
    <v-flex xs12 md4 text-xs-center>
        <v-card color="cyan" class="ma-1" height="110px">
            <v-card-text class="title pa-5">
                <v-icon large color="amber">local_shipping</v-icon> ارسال شده: {{ sent }}
            </v-card-text>
        </v-card>
    </v-flex>
    <v-flex xs12 md4 text-xs-center>
        <v-card color="teal lighten-2" class="ma-1" height="110px">
                <v-card-text class="title pa-5">
                <v-icon large color="lime">local_mall</v-icon> اتمام سفارش: {{ done }}
            </v-card-text>
        </v-card>
    </v-flex>
    <v-flex xs12 md4 text-xs-center>
        <v-card color="light-green" class="ma-1" height="110px">
            <v-card-text class="title pa-5">
                <v-icon large color="teal">beenhere</v-icon> دریافت شده: {{ received }}
            </v-card-text>
        </v-card>
    </v-flex>
    <v-flex xs12 md4 text-xs-center>
        <v-card color="teal darken-4" class="ma-1" height="110px">
            <v-card-text class="title pa-5">
                <v-icon large color="green lighten-2">local_atm</v-icon> پرداخت شده: {{ paid }}
            </v-card-text>
        </v-card>
    </v-flex>
    </v-layout>
</div>

</template>

<script>
export default {
    props: ['unpaid', 'paid', 'sent', 'received', 'total', 'unsent', 'done']
}
</script>
