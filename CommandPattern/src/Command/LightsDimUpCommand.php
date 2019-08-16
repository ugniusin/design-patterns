<?php

namespace CommandPattern\Command;

use CommandPattern\LightsSwitcher;

class LightsDimUpCommand implements Command
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
        $this->lightsSwitcher->dimUp();
    }

    public function unexecute()
    {
        $this->lightsSwitcher->dimDown();
    }
}
