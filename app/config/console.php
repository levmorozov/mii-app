<?php

return [

    'console' => [
        'namespace' => '\app\console',
    ],

    'log' => [
        '\mii\console\Log' => [
            'levels' => mii\log\Logger::ALL,
            'file' => '/logs/console.log',
            'category' => ['console']
        ]
    ]
];