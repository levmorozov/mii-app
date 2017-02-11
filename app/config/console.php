<?php

return [

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
                    'file' => '@app/logs/console.log',
                    'category' => ['console']
                ]
            ]
        ],
    ]

];