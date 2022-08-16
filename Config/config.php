<?php

return [
    'name' => 'Dashboard',

    'menus' => [
        [
            'text'      => 'Dashboard',
            'url'     => 'admin/dashboard',
            'icon'      => 'fas fa-fire',
            'order'     => 1,
            'can'       => 'dashboard-read'
        ],
    ]
];
