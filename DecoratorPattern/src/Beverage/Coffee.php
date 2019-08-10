<?php

namespace DecoratorPattern\Beverage;

class Coffee extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'It is a brewed drink prepared from roasted coffee beans,' .
            " the seeds of berries from certain Coffea species.\n";
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 1.50;
    }
}
