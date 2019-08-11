<?php

namespace AbstractFactoryPattern\PizzaAbstractFactory;

use AbstractFactoryPattern\Product\Meat;
use AbstractFactoryPattern\Product\Pad;
use AbstractFactoryPattern\Product\Paprika;
use AbstractFactoryPattern\Product\Salami;
use AbstractFactoryPattern\Product\Sauce;
use AbstractFactoryPattern\Product\Tomato;
use AbstractFactoryPattern\Product\TomatoSauce;
use AbstractFactoryPattern\Product\Vegetable;
use AbstractFactoryPattern\Product\WheatDoughPad;

class PeperoniAbstractFactory extends PizzaAbstractFactory
{
    /**
     * @return Pad
     */
    public function createPad(): Pad
    {
        return new WheatDoughPad();
    }

    /**
     * @return Sauce
     */
    public function createSauce(): Sauce
    {
        return new TomatoSauce();
    }

    /**
     * @param string|null $vegetableName
     * @return Vegetable
     */
    public function createVegetable(string $vegetableName = null): Vegetable
    {
        if ($vegetableName === 'paprika') {
            return new Paprika();
        }

        return new Tomato();
    }

    /**
     * @return Meat
     */
    public function createMeat(): Meat
    {
        return new Salami();
    }
}
