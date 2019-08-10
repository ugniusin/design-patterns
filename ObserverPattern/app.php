<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new ObserverPatternFramework\Container();
$container->bootstrap();

/** @var ObserverPattern\Client $client */
$client = $container->get('client');

$client->run();
