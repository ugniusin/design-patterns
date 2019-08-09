<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\DependencyInjection\Reference;
use Strategy\FlyStrategy;
use Strategy\QuackStrategy;

// init service container
$container = new \Symfony\Component\DependencyInjection\ContainerBuilder();

$container->autowire('duck.cityDuck', Strategy\Duck::class)
    ->addArgument(new FlyStrategy\FlyShortDistanceStrategy())
    ->addArgument(new QuackStrategy\QuackQuiteStrategy());
$container->setAlias(Strategy\CityDuck::class, 'duck.cityDuck');

$container->autowire('duck.wildDuck', Strategy\Duck::class)
    ->addArgument(new FlyStrategy\FlyLongDistanceStrategy())
    ->addArgument(new QuackStrategy\QuackLoudStrategy());
$container->setAlias(Strategy\WildDuck::class, 'duck.wildDuck');

$container->autowire('duck.toyDuck', Strategy\Duck::class)
    ->addArgument(new FlyStrategy\FlyNothingStrategy())
    ->addArgument(new QuackStrategy\QuackDigitalStrategy());
$container->setAlias(Strategy\ToyDuck::class, 'duck.toyDuck');

$container->autowire('client', Strategy\Client::class)
    ->addArgument(new Reference(Strategy\CityDuck::class))
    ->addArgument(new Reference(Strategy\WildDuck::class))
    ->addArgument(new Reference(Strategy\ToyDuck::class));

/** @var Strategy\Client $client */
$client = $container->get('client');

$client->run();
