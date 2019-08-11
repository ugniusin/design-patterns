<?php

namespace AbstractFactoryPattern\Product;

class Prosciutto extends Meat
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 14;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.3;
    }
}
