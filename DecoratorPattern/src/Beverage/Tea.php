<?php

namespace DecoratorPattern\Beverage;

class Tea extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'Beverage produced by steeping in freshly boiled water' .
            " the young leaves and leaf buds of the tea plant, Camellia sinensis!\n";
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 0.50;
    }
}
