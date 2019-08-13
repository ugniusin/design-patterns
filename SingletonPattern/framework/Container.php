<?php

namespace SingletonPatternFramework;

use SingletonPattern\Client;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Container extends ContainerBuilder
{
    public function bootstrap()
    {
        $this->autowire('client', Client::class);
    }
}
