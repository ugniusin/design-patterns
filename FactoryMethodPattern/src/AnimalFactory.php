<?php

namespace FactoryMethodPattern;

use FactoryMethodPattern\Animal\Animal;

abstract class AnimalFactory
{
    abstract public function create(): Animal;
}
