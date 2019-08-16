<?php

namespace CommandPattern;

class LightsSwitcher
{
    private $currentLightness = 0;

    public function turnOn()
    {
        $this->currentLightness = 10;
        echo "On. Brightness is at: {$this->currentLightness}\n";
    }

    public function turnOff()
    {
        $this->currentLightness = 0;
        echo "Off. Brightness is at: {$this->currentLightness}\n";
    }

    public function dimUp()
    {
        if ($this->currentLightness > 9) {
            return;
        }

        $this->currentLightness++;
        echo "Dim up. Brightness is at: {$this->currentLightness}\n";
    }

    public function dimDown()
    {
        if ($this->currentLightness < 1) {
            return;
        }

        $this->currentLightness--;
        echo "Dim down. Brightness is at: {$this->currentLightness}\n";
    }
}
