<?php

namespace SingletonPattern;

class Client
{
    public function run()
    {
        $instance = Singleton::getInstance();
        $instance->setKey('ONLY_SINGLE_INSTANCE_IS_ALLOWED');
        echo $instance->getKey() . "\n";

        $theSameInstance = Singleton::getInstance();
        echo $theSameInstance->getKey() . "\n";
    }
}
