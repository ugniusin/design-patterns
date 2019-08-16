<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new CommandPatternFramework\Container();
$container->bootstrap();

/** @var CommandPattern\Client $client */
$client = $container->get('client');

$client->run();
