<?php

namespace StrategyPatternFramework;

use StrategyPattern\CityDuck;
use StrategyPattern\Client;
use StrategyPattern\Duck;
use StrategyPattern\ToyDuck;
use StrategyPattern\WildDuck;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use StrategyPattern\FlyStrategy;
use StrategyPattern\QuackStrategy;

class Container extends ContainerBuilder
{
    public function bootstrap()
    {
        $this->autowire('duck.cityDuck', Duck::class)
            ->addArgument(new FlyStrategy\FlyShortDistanceStrategy())
            ->addArgument(new QuackStrategy\QuackQuiteStrategy());
        $this->setAlias(CityDuck::class, 'duck.cityDuck');

        $this->autowire('duck.wildDuck', Duck::class)
            ->addArgument(new FlyStrategy\FlyLongDistanceStrategy())
            ->addArgument(new QuackStrategy\QuackLoudStrategy());
        $this->setAlias(WildDuck::class, 'duck.wildDuck');

        $this->autowire('duck.toyDuck', Duck::class)
            ->addArgument(new FlyStrategy\FlyNothingStrategy())
            ->addArgument(new QuackStrategy\QuackDigitalStrategy());
        $this->setAlias(ToyDuck::class, 'duck.toyDuck');

        $this->autowire('client', Client::class)
            ->addArgument(new Reference(CityDuck::class))
            ->addArgument(new Reference(WildDuck::class))
            ->addArgument(new Reference(ToyDuck::class));
    }
}
