<?php

return [
    'title' => 'Home', // Title
    'titleStyle' => [
        'color' => '#BA9A5A' , //gold
    ],
    'navbarStyle' => [
        'background-color' => '#103050' //dark-blue
    ],
    'footerStyle' => [
        'background-color' => '#103050',
        'color'            => '#BA9A5A'
    ],
    'sidebarStyle' => [
        'background-color' => '#103050',
        'color'            => '#BA9A5A'
    ],
    'toggleBarStyle' => [
        'color' => '#BA9A5A' , //gold
    ],
    'icon' => [
        'name' => 'fa-compass', // font-awesome or material icon
        'color' => '#26A69A',
        'show'  => false
    ],
    'logo' => [
        'url' => '/img/Maghsoud-Porcelain-.png',
        'width' => '30px',
        'height' => '30px',
        'show'  => true
    ],
    'trademark' => 'فروشگاه آنلاین شیک پوش',
    'domain' => 'Shikposhan.ir',
    'url' => env('APP_URL', 'http://localhost'),
    'email' => env('MAIL_USERNAME', 'admin@vuetified.app'),
    'social_links' => [
        'facebook' => env('HOME_FB','https://www.facebook.com/vuetified'),
        'instagram' => env('HOME_INSTA','https://www.instagram.com/vuetified'),
        'twitter' => env('HOME_TWITTER','https://twitter.com/@vuetified'),
        'youtube' => env('HOME_YOUTUBE','https://www.youtube.com/vuetified'),
        'linkedIn' => env('HOME_LINKEDIN','https://www.linkedin.com/in/vuetified'),
    ]
];