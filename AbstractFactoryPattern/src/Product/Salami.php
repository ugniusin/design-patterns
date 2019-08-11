<?php

namespace AbstractFactoryPattern\Product;

class Salami extends Meat
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 12;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.3;
    }
}
