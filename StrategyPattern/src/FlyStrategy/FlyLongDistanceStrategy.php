<?php

namespace StrategyPattern\FlyStrategy;

class FlyLongDistanceStrategy implements FlyStrategy
{
    public function fly()
    {
        echo "I've flied 500km!\n";
    }
}
