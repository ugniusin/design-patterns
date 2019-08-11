<?php

namespace AbstractFactoryPattern\PizzaAbstractFactory;

use AbstractFactoryPattern\Product\Product;

abstract class PizzaAbstractFactory
{
    /**
     * @return Product
     */
    abstract public function createPad(): Product;

    /**
     * @return Product
     */
    abstract public function createSauce(): Product;

    /**
     * @param string|null $vegetableName
     * @return Product
     */
    abstract public function createVegetable(string $vegetableName = null): Product;

    /**
     * @return Product
     */
    abstract public function createMeat(): Product;
}
