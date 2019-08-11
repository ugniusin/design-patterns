<?php

namespace FactoryMethodPattern;

use FactoryMethodPattern\Animal\Animal;
use FactoryMethodPattern\Animal\Cat;
use FactoryMethodPattern\Animal\Dog;
use FactoryMethodPattern\Animal\Duck;

class RandomAnimalFactory extends AnimalFactory
{
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

        $random = random_int(1, \count($possibleAnimals));

        return new $possibleAnimals[--$random];
    }
}
