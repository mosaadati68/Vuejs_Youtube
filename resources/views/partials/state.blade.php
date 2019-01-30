<script>
    window.App = {!! json_encode(array_merge(
        [
            'csrfToken' => csrf_token(),
            //'env' => config('app.env'),
            //'api_endpoint' => config('app.domain').'/api',
            'site'  => config('site'), // Should Be Fetch From DB Settings
            //'menu' => config('menu'), // Should Be Fetch From DB Menu and GroupMenu
            //'grouplinks' => config('grouplinks'),
            'theme' => config('theme'),
            //'cart' => self::getCart(),
            //'sponsor' => self::getSponsor()
            // This will only be Loaded for Authenticated users
            // Specifically Admin Role
            // Hmmf maybe we can use Resource to Dynamically Load this stuff?
            // 'widgets' => [
            //     'productCounter' => self::getProducts(), // admin
            //     'usersCounter' => self::getUsersCount(), // admin
            //     'activeUsersCounter' => self::getActiveUsersCounter(), // admin
            //     'totalPendingIncome' => self::getTotalPendingIncome(),
            //     'totalPaidIncome' => self::getTotalPaidIncome(), // admin
            //     'totalRefund' => self::getTotalRefund(), //admin
            //     'placedOrderCounter' => self::getPlacedOrders(), // customer
            //     'pendingOrderCounter' => self::getPendingOrders(), // customer
            //     'paidOrderCounter' => self::getPaidOrders(), // customer
            //     'deliveredOrderCounter' => self::getDeliveredOrders(), // customer
            // ],
        ],
         [
            // Add Key and Value Here You Want to Added to Initial State
        ]
    ))!!}
</script>
