<?php

$config =  [

    'error_controller' => '\app\controllers\Error',

    'components' => [
        'cache' => [
            'prefix' => 'miiapp',
            'default_expire'     => 3600
        ],
    ]

];


return array_replace_recursive($config, require(__DIR__.'/local.php'));