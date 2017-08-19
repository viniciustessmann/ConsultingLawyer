<?php

require_once 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    return 'Hello ';
});

$app->run();