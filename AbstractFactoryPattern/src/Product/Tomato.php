<?php

namespace AbstractFactoryPattern\Product;

class Tomato extends Vegetable
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 2.5;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.15;
    }
}
