<?php

$config =  [

    'error_controller' => '\app\controllers\Error',

    'log' => [
        '\mii\log\File' => [
            'levels' => mii\log\Logger::ALL,
            'file' => '/logs/mii.log',
            'category' => ['mii']
        ]
    ],

    'image' => [
        'class' => '\mii\image\Gmagick'
    ],

    'cookie' => [
        'httponly' => true
    ],

    'session' => [
        'name' => 'miis',
        'lifetime' => 43200,
    ],

    'cache' => [
        'apc' => [
            'class' => '\mii\cache\Apc',
            'prefix' => 'miiapp',
            'default_expire'     => 3600
        ]
    ],

];


return array_replace_recursive($config, require(__DIR__.'/local.php'));