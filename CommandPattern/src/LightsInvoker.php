<?php

namespace CommandPattern;

use CommandPattern\Command\LightsDimDownCommand;
use CommandPattern\Command\LightsDimUpCommand;
use CommandPattern\Command\LightsOffCommand;
use CommandPattern\Command\LightsOnCommand;

class LightsInvoker
{
    /** @var LightsOnCommand */
    private $lightsOnCommand;

    /** @var LightsOffCommand */
    private $lightsOffCommand;

    /** @var LightsDimUpCommand */
    private $lightsDimUpCommand;

    /** @var LightsDimDownCommand */
    private $lightsDimDownCommand;

    /**
     * @param LightsOnCommand $lightsOnCommand
     * @param LightsOffCommand $lightsOffCommand
     * @param LightsDimUpCommand $lightsDimUpCommand
     * @param LightsDimDownCommand $lightsDimDownCommand
     */
    public function __construct(
        LightsOnCommand $lightsOnCommand,
        LightsOffCommand $lightsOffCommand,
        LightsDimUpCommand $lightsDimUpCommand,
        LightsDimDownCommand $lightsDimDownCommand
    ) {
        $this->lightsOnCommand = $lightsOnCommand;
        $this->lightsOffCommand = $lightsOffCommand;
        $this->lightsDimUpCommand = $lightsDimUpCommand;
        $this->lightsDimDownCommand = $lightsDimDownCommand;
    }

    public function clickOn()
    {
        $this->lightsOnCommand->execute();
    }

    public function clickOff()
    {
        $this->lightsOffCommand->execute();
    }

    public function clickUp()
    {
        $this->lightsDimUpCommand->execute();
    }

    public function clickDown()
    {
        $this->lightsDimDownCommand->execute();
    }
}
