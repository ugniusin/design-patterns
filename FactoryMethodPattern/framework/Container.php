<?php

namespace FactoryMethodPatternFramework;

use FactoryMethodPattern\AnimalFactory\BalancedAnimalFactory;
use FactoryMethodPattern\Client;
use FactoryMethodPattern\AnimalFactory\RandomAnimalFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class Container extends ContainerBuilder
{
    public function bootstrap()
    {
        $this->autowire('randomAnimalFactory', RandomAnimalFactory::class);
        $this->autowire('balancedAnimalFactory', BalancedAnimalFactory::class);

        $this->autowire('client', Client::class)
            ->addArgument(new Reference('randomAnimalFactory'))
            ->addArgument(new Reference('balancedAnimalFactory'));
    }
}
