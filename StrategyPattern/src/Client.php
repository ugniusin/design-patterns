<?php

namespace StrategyPattern;

class Client
{
    /** @var CityDuck */
    private $cityDuck;

    /** @var WildDuck */
    private $wildDuck;

    /** @var ToyDuck */
    private $toyDuck;

    /**
     * @param CityDuck $cityDuck
     * @param WildDuck $wildDuck
     * @param ToyDuck $toyDuck
     */
    public function __construct(
        CityDuck $cityDuck,
        WildDuck $wildDuck,
        ToyDuck $toyDuck
    ) {
        $this->cityDuck = $cityDuck;
        $this->wildDuck = $wildDuck;
        $this->toyDuck = $toyDuck;
    }

    public function run()
    {
        $this->cityDuck->fly();
        $this->cityDuck->quack();

        echo "\n";

        $this->wildDuck->fly();
        $this->wildDuck->quack();

        echo "\n";

        $this->toyDuck->fly();
        $this->toyDuck->quack();
    }
}
