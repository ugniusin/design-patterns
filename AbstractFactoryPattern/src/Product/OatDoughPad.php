<?php

namespace AbstractFactoryPattern\Product;

class OatDoughPad extends Pad
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
