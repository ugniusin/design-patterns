<?php

namespace FactoryMethodPattern\AnimalFactory;

use FactoryMethodPattern\Animal\Animal;

abstract class AnimalFactory
{
    abstract public function create(): Animal;
}
