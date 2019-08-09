<?php

namespace Strategy\QuackStrategy;

class QuackDigitalStrategy implements QuackStrategy
{
    public function quack()
    {
        echo "01010001 01110101 01100001 01100011 01101011 00101100 00100000 01110001 01110101 01100001 01100011 01101011 00100001.\n";
    }
}
