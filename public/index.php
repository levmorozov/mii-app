<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../boot.php');

$config = require(path('app').'/config/main.php');

$app = new \mii\web\App($config);

require(path('app').'/routes.php');

$app->run();

