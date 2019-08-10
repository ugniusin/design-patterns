<?php

namespace StrategyPattern\QuackStrategy;

class QuackQuiteStrategy implements QuackStrategy
{
    public function quack()
    {
        echo "Quack, quack.\n";
    }
}
