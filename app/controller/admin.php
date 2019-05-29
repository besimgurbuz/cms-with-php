<?php

if(!route(1)){
    $route[1] = 'index';
}
if(!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

if(!session('admin_login')){
    $route[1] ='login';
}

$menus = [
    'index'=>[
        'title'=>'Home',
        'icon'=>'tachometer-alt'
    ],
    'users'=>[
        'title'=>'Admins',
        'icon'=>'user',
        'submenu'=>[
            'add-user'=>'Add admin',
            'users'=>'View admins'
        ]
    ],
    'settings'=>[
        'title'=>'Settings',
        'icon'=>'cog'
    ],
    'contact'=>[
        'title'=>'Contact Messages',
        'icon'=>'envelope'
    ],
    'members'=>[
        'title'=>'Members',
        'icon'=>'users',
        'submenu'=>[
            'add-member'=>'Add member',
            'members'=>'View Members'
        ]
    ],
    'partners'=>[
        'title'=>'Partners',
        'icon'=>'handshake',
        'submenu'=>[
            'add-partner'=>'Add Partner',
            'partners'=>'View Partners'
        ]
    ]

];
require admin_controller(route(1));