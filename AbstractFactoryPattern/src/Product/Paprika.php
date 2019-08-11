<?php

namespace AbstractFactoryPattern\Product;

class Paprika extends Vegetable
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 3;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.15;
    }
}
