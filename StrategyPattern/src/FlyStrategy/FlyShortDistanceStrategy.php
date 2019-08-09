<?php

namespace Strategy\FlyStrategy;

class FlyShortDistanceStrategy implements FlyStrategy
{
    public function fly()
    {
        echo "I've flied 25m!\n";
    }
}
