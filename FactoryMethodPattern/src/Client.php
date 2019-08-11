<?php

namespace FactoryMethodPattern;

use FactoryMethodPattern\AnimalFactory\BalancedAnimalFactory;
use FactoryMethodPattern\AnimalFactory\RandomAnimalFactory;

class Client
{
    /** @var RandomAnimalFactory */
    private $randomAnimalFactory;

    /** @var BalancedAnimalFactory */
    private $balancedAnimalFactory;

    /**
     * @param RandomAnimalFactory $randomAnimalFactory
     * @param BalancedAnimalFactory $balancedAnimalFactory
     */
    public function __construct(
        RandomAnimalFactory $randomAnimalFactory,
        BalancedAnimalFactory $balancedAnimalFactory
    ) {
        $this->randomAnimalFactory = $randomAnimalFactory;
        $this->balancedAnimalFactory = $balancedAnimalFactory;
    }

    public function run()
    {
        echo "Random animals:\n";
        for ($i = 0; $i <= 10; $i++) {
            $randomAnimal = $this->randomAnimalFactory->create();
            $randomAnimal->talk();
        }

        echo "\n";

        echo "Balanced animals:\n";
        for ($i = 0; $i <= 10; $i++) {
            $balancedAnimal = $this->balancedAnimalFactory->create();
            $balancedAnimal->talk();
        }
    }
}
