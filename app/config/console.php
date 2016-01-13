<?php

return [

    'debug' => false,
    'profiling' => false,

    'console' => [
        'namespaces' => [
            '\app\console'
        ]
    ],

    'components' => [
        'log' => [
            'class' => 'mii\log\Logger',
            'targets' => [
                [
                    'class' => '\mii\console\Log',
                    'levels' => mii\log\Logger::ALL,
                    'file' => '/logs/console.log',
                    'category' => ['console']
                ]
            ]
        ],
    ]

];