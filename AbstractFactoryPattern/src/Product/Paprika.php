<?php

namespace AbstractFactoryPattern\Product;

class Paprika extends Product
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
