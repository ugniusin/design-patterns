<?php

namespace Strategy;

use Strategy\FlyStrategy\FlyStrategy;
use Strategy\QuackStrategy\QuackStrategy;

class Duck implements CityDuck, WildDuck, ToyDuck
{
    /** @var FlyStrategy */
    private $flyStrategy;

    /** @var QuackStrategy */
    private $quackStrategy;

    /**
     * @param FlyStrategy $flyStrategy
     * @param QuackStrategy $quackStrategy
     */
    public function __construct(
        FlyStrategy $flyStrategy,
        QuackStrategy $quackStrategy
    ) {
        $this->flyStrategy = $flyStrategy;
        $this->quackStrategy = $quackStrategy;
    }

    public function fly()
    {
        $this->flyStrategy->fly();
    }

    public function quack()
    {
        $this->quackStrategy->quack();
    }
}
