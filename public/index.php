<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../boot.php');

(new \mii\web\App(array_replace_recursive(
    require(path('app').'/config/main.php'),
    require(path('app').'/config/web.php')
)))->run();

