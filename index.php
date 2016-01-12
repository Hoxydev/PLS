<?php

require_once __DIR__.'/vendor/autoload.php'; 
require_once __DIR__.'/loader/routes/main.php';
require_once __DIR__.'/loader/config/dev.php';
require_once __DIR__.'/loader/app.php';

$app = new Silex\Application(); 
$app->run();