<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../boot.php');

$config = array_replace_recursive(
    require(path('app').'/config/main.php'),
    require(path('app').'/config/web.php')
);

$app = new \mii\web\App($config);

$app->run();

