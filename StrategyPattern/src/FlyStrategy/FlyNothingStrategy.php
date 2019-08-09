<?php

namespace Strategy\FlyStrategy;

class FlyNothingStrategy implements FlyStrategy
{
    public function fly()
    {
        echo "I don't fly!\n";
    }
}
