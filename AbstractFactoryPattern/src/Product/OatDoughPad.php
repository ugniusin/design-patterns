<?php

namespace AbstractFactoryPattern\Product;

class OatDoughPad extends Product
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 4.2;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.4;
    }
}
