<?php

require(__DIR__ . '/vendor/levmorozov/mii/src/Mii.php');

Mii::set_path([
    'root'   => __DIR__,
    'app'    => __DIR__ . '/app',
    'pub'    => __DIR__ . '/public',
    'tmp'    => __DIR__ . '/tmp',
    'vendor' => __DIR__ . '/vendor',
]);