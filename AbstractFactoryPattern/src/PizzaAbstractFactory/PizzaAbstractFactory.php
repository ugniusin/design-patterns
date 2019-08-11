<?php

namespace AbstractFactoryPattern\PizzaAbstractFactory;

use AbstractFactoryPattern\Product\Meat;
use AbstractFactoryPattern\Product\Pad;
use AbstractFactoryPattern\Product\Sauce;
use AbstractFactoryPattern\Product\Vegetable;

abstract class PizzaAbstractFactory
{
    /**
     * @return Pad
     */
    abstract public function createPad(): Pad;

    /**
     * @return Sauce
     */
    abstract public function createSauce(): Sauce;

    /**
     * @param string|null $vegetableName
     * @return Vegetable
     */
    abstract public function createVegetable(string $vegetableName = null): Vegetable;

    /**
     * @return Meat
     */
    abstract public function createMeat(): Meat;
}
