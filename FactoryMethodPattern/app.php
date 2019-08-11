<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new FactoryMethodPatternFramework\Container();
$container->bootstrap();

/** @var FactoryMethodPattern\Client $client */
$client = $container->get('client');

$client->run();
