<?php

namespace CommandPattern\Command;

use CommandPattern\LightsSwitcher;

class LightsOnCommand implements Command
{
    /** @var LightsSwitcher */
    private $lightsSwitcher;

    /**
     * @param LightsSwitcher $lightsSwitcher
     */
    public function __construct(
        LightsSwitcher $lightsSwitcher
    ) {
        $this->lightsSwitcher = $lightsSwitcher;
    }

    public function execute()
    {
        $this->lightsSwitcher->turnOn();
    }

    public function unexecute()
    {
        $this->lightsSwitcher->turnOff();
    }
}
