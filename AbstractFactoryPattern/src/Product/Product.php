<?php

namespace AbstractFactoryPattern\Product;

abstract class Product
{
    /**
     * @return float
     */
    abstract public function getPricePerKg(): float;

    /**
     * @return float
     */
    abstract public function getKgPerPortion(): float;
}
