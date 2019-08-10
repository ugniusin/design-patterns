<?php

namespace DecoratorPattern\Beverage;

abstract class Beverage
{
    /**
     * @return string
     */
    abstract public function getDescription(): string;

    /**
     * @return float
     */
    abstract public function getCost(): float;
}
