<?php

namespace DecoratorPattern\AddonDecorators;

class MilkDecorator extends AddonDecorator
{
    const MILK_COST = 0.25;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . "Also, with some milk added.\n";
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->beverage->getCost() + self::MILK_COST;
    }
}
