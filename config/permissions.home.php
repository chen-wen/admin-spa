<?php

return [
    'name'       => '首页',
    'index'      => 'welcome', // 导航页链接地址，routes 节点的键名
    'prefix'     => '', // 路由前缀
    'namespace'  => 'App\Http\Controllers',
    'middleware' => [
        'web', 'guard.auth', 'guard.permission',
        'guard.throttle', 'guard.logger',
    ],
    'groups'     => [
        'Dashboard' => [
            'home',
        ],
    ],
    'routes'     => [
        'welcome'           => [
            'name'     => 'Welcome',
            'uri'      => '/',
            'method'   => 'get',
            'type'     => 'page',
            'uses'     => 'HomeController@welcome',
            'log.file' => '【{{login.name}}】访问了操作 Welcome',
        ],
        'home'              => [
            'name'     => 'Home',
            'uri'      => '/home',
            'method'   => 'get',
            'type'     => 'menu',
            'uses'     => 'HomeController@home',
            'limit-on' => false, // 权限开关，值为false 则登陆后不限制该功能,默认为 true
            'log.file' => '【{{login.name}}】访问了操作日志页',
        ],
    ],
];
