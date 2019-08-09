<?php

namespace Strategy\QuackStrategy;

class QuackQuiteStrategy implements QuackStrategy
{
    public function quack()
    {
        echo "Quack, quack.\n";
    }
}
