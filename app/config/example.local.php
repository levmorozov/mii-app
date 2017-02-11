<?php

return [

    'debug' => false,

    'app' => [
        'maintenance' => false,
    ],

    'components' => [

        'request' => [
            'cookie_salt' => 'REPLACE IT WITH SOME RANDOM STRING',
            'cookie_httponly' => true
        ],
        'db' => [
            'connection' => [

                'hostname'   => 'localhost',
                'username'   => 'USERNAME',
                'password'   => 'PASSWORD',
                'database'   => 'DBNAME',
            ],
            'charset'      => 'utf8'
        ],

    ]
];
