<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new DecoratorPatternFramework\Container();
$container->bootstrap();

/** @var ObserverPattern\Client $client */
$client = $container->get('client');

$client->run();
