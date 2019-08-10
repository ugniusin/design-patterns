<?php

namespace DecoratorPattern\AddonDecorators;

class ChocolateDecorator extends AddonDecorator
{
    const CHOCOLATE_COST = 0.7;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . "And, with a melted piece of delicious dark chocolate.\n";
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return ceil($this->beverage->getCost() + self::CHOCOLATE_COST);
    }
}
