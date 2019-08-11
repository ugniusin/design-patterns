<?php

namespace AbstractFactoryPattern\Product;

class Salami extends Product
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
