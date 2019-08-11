<?php

namespace AbstractFactoryPatternFramework;

use AbstractFactoryPattern\PizzaAbstractFactory\PeperoniAbstractFactory;
use AbstractFactoryPattern\PizzaAbstractFactory\ProsciuttoAbstractFactory;
use AbstractFactoryPattern\Client;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class Container extends ContainerBuilder
{
    public function bootstrap()
    {
        $this->autowire('peperoniAbstractFactory', PeperoniAbstractFactory::class);
        $this->autowire('prosciuttoAbstractFactory', ProsciuttoAbstractFactory::class);

        $this->autowire('client', Client::class)
            ->addArgument(new Reference('peperoniAbstractFactory'))
            ->addArgument(new Reference('prosciuttoAbstractFactory'));
    }
}
