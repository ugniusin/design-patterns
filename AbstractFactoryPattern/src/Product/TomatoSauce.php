<?php

namespace AbstractFactoryPattern\Product;

class TomatoSauce extends Product
{
    /**
     * @return float
     */
    public function getPricePerKg(): float
    {
        return 8;
    }

    /**
     * @return float
     */
    public function getKgPerPortion(): float
    {
        return 0.15;
    }
}
