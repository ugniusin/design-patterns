<?php

namespace DecoratorPattern;

class Coffee extends Beverage
{
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return "It's cup of simple black coffee!\n";
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return 1.50;
    }
}
