<?php

namespace ObserverPattern\WeatherStationObservers;

use ObserverPattern\Observer;
use ObserverPattern\WeatherStation;

class WindDisplay implements Observer, Display
{
    /** @var WeatherStation */
    private $weatherStation;

    /** @var int */
    private $windInMeters;

    /**
     * @param WeatherStation $weatherStation
     */
    public function __construct(WeatherStation $weatherStation)
    {
        $this->weatherStation = $weatherStation;
        $this->windInMeters = $weatherStation->getWindInMetersPerSecond();
    }

    public function display() {
        echo "The wind now is {$this->windInMeters} m/s!\n\n";
    }

    public function update()
    {
        $newWindInMeters = $this->weatherStation->getWindInMetersPerSecond();

        if ($newWindInMeters !== $this->windInMeters) {
            $this->windInMeters = $newWindInMeters;
            $this->display();
        }
    }
}
