<?php

namespace FactoryMethodPattern;

use FactoryMethodPattern\Animal\Animal;
use FactoryMethodPattern\Animal\Cat;
use FactoryMethodPattern\Animal\Dog;
use FactoryMethodPattern\Animal\Duck;

class BalancedAnimalFactory extends AnimalFactory
{
    private $lastAnimalIndex = 0;

    /**
     * @return Animal
     * @throws \Exception
     */
    public function create(): Animal
    {
        $possibleAnimals = [
            Dog::class,
            Cat::class,
            Duck::class,
        ];

        $animal = new $possibleAnimals[$this->lastAnimalIndex % \count($possibleAnimals)];

        ++$this->lastAnimalIndex;

        return $animal;
    }
}
