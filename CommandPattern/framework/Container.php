<?php

namespace CommandPatternFramework;

use CommandPattern\Client;
use CommandPattern\Command\LightsDimDownCommand;
use CommandPattern\Command\LightsDimUpCommand;
use CommandPattern\Command\LightsOffCommand;
use CommandPattern\Command\LightsOnCommand;
use CommandPattern\LightsInvoker;
use CommandPattern\LightsSwitcher;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class Container extends ContainerBuilder
{
    public function bootstrap()
    {
        $this->autowire('lightsSwitcher', LightsSwitcher::class);

        $this->autowire('lightsOnCommand', LightsOnCommand::class)
            ->addArgument(new Reference('lightsSwitcher'));

        $this->autowire('lightsOffCommand', LightsOffCommand::class)
            ->addArgument(new Reference('lightsSwitcher'));

        $this->autowire('lightsDimUpCommand', LightsDimUpCommand::class)
            ->addArgument(new Reference('lightsSwitcher'));

        $this->autowire('lightsDimDownCommand', LightsDimDownCommand::class)
            ->addArgument(new Reference('lightsSwitcher'));

        $this->autowire('lightsInvoker', LightsInvoker::class)
            ->addArgument(new Reference('lightsOnCommand'))
            ->addArgument(new Reference('lightsOffCommand'))
            ->addArgument(new Reference('lightsDimUpCommand'))
            ->addArgument(new Reference('lightsDimDownCommand'));

        $this->autowire('client', Client::class)
            ->addArgument(new Reference('lightsInvoker'));
    }
}
