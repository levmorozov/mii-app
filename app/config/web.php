<?php

return [
    'components' => [
        'log' => [
            'class' => 'mii\log\Logger',
            'targets' => [
                [
                    'class' => '\mii\log\File',
                    'levels' => mii\log\Logger::ALL,
                    'file' => '/logs/mii.log',
                    'category' => ['mii']
                ]
            ]
        ],

        'auth' => 'mii\auth\Auth',

        'router' => [
            'routes' => require(__DIR__.'/routes.php')
        ],
        'session' => [
            'name' => 'miis',
            'lifetime' => 43200,
        ],
    ]
];