<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new StrategyPatternFramework\Container();
$container->bootstrap();

/** @var StrategyPattern\Client $client */
$client = $container->get('client');

$client->run();
