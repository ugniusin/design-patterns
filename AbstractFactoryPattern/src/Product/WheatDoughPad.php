<?php

namespace AbstractFactoryPattern\Product;

class WheatDoughPad extends Pad
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 4.5;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.4;
    }
}
