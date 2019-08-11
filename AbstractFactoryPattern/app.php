<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new AbstractFactoryPatternFramework\Container();
$container->bootstrap();

/** @var AbstractFactoryPattern\Client $client */
$client = $container->get('client');

$client->run();
