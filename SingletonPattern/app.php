<?php

require __DIR__ . '/../vendor/autoload.php';

// init service container
$container = new SingletonPatternFramework\Container();
$container->bootstrap();

/** @var SingletonPattern\Client $client */
$client = $container->get('client');

$client->run();
