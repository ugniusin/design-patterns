<?php

namespace ObserverPattern\WeatherStationObservers;

use ObserverPattern\Observer;
use ObserverPattern\WeatherStation;

class TemperatureDisplay implements Observer, Display
{
    /** @var WeatherStation */
    private $weatherStation;

    /** @var int */
    private $temperatureInCelsius;

    /**
     * @param WeatherStation $weatherStation
     */
    public function __construct(WeatherStation $weatherStation)
    {
        $this->weatherStation = $weatherStation;
        $this->temperatureInCelsius = $weatherStation->getTemperatureInCelsius();
    }

    public function display() {
        echo "The temperature now is {$this->weatherStation->getTemperatureInCelsius()} °C!\n\n";
    }

    public function update()
    {
        $newTemperatureInCelsius = $this->weatherStation->getTemperatureInCelsius();

        if ($newTemperatureInCelsius !== $this->temperatureInCelsius) {
            $this->temperatureInCelsius = $newTemperatureInCelsius;
            $this->display();
        }
    }
}
