<?php

namespace Strategy\QuackStrategy;

class QuackLoudStrategy implements QuackStrategy
{
    public function quack()
    {
        echo "Quack, quack, quack!!!\n";
    }
}
