<?php

namespace CommandPattern\Command;

use CommandPattern\LightsSwitcher;

class LightsOffCommand implements Command
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
        $this->lightsSwitcher->turnOff();
    }

    public function unexecute()
    {
        $this->lightsSwitcher->turnOn();
    }
}
