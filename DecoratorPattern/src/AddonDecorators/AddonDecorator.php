<?php

namespace DecoratorPattern\AddonDecorators;

use DecoratorPattern\Beverage\Beverage;

abstract class AddonDecorator extends Beverage
{
    /** @var Beverage */
    protected $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
