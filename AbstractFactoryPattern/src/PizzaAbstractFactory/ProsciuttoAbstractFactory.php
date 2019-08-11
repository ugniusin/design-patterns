<?php

namespace AbstractFactoryPattern\PizzaAbstractFactory;

use AbstractFactoryPattern\Product\OatDoughPad;
use AbstractFactoryPattern\Product\Paprika;
use AbstractFactoryPattern\Product\Product;
use AbstractFactoryPattern\Product\Prosciutto;
use AbstractFactoryPattern\Product\Tomato;
use AbstractFactoryPattern\Product\TomatoSauce;

class ProsciuttoAbstractFactory extends PizzaAbstractFactory
{
    /**
     * @return Product
     */
    public function createPad(): Product
    {
        return new OatDoughPad();
    }

    /**
     * @return Product
     */
    public function createSauce(): Product
    {
        return new TomatoSauce();
    }

    /**
     * @param string|null $vegetableName
     * @return Product
     */
    public function createVegetable(string $vegetableName = null): Product
    {
        if ($vegetableName === 'paprika') {
            return new Paprika();
        }

        return new Tomato();
    }

    /**
     * @return Product
     */
    public function createMeat(): Product
    {
        return new Prosciutto();
    }
}