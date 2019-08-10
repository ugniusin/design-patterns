<?php

namespace StrategyPattern\QuackStrategy;

class QuackLoudStrategy implements QuackStrategy
{
    public function quack()
    {
        echo "Quack, quack, quack!!!\n";
    }
}
