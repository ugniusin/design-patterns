<?php

namespace CommandPattern;

class Client
{
    /** @var LightsInvoker */
    private $lightsInvoker;

    /**
     * @param LightsInvoker $lightsInvoker
     */
    public function __construct(
        LightsInvoker $lightsInvoker
    ) {
        $this->lightsInvoker = $lightsInvoker;
    }

    public function run()
    {
        $this->lightsInvoker->clickOn();
        $this->lightsInvoker->clickDown();
        $this->lightsInvoker->clickDown();
        $this->lightsInvoker->clickDown();
        $this->lightsInvoker->clickOff();
        $this->lightsInvoker->clickUp();
        $this->lightsInvoker->clickUp();
        $this->lightsInvoker->clickUp();
        $this->lightsInvoker->clickOn();
    }
}
