<?php

require_once 'vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->get('/', function() use($app) {
    return 'Hello ';
});

$app->get('/about', function() use ($app) {
	return 'About this site';
});

$app->run();