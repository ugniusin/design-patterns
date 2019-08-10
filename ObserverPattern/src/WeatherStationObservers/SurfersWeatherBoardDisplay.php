<?php

namespace ObserverPattern\WeatherStationObservers;

use ObserverPattern\Observer;
use ObserverPattern\WeatherStation;

class SurfersWeatherBoardDisplay implements Observer, Display
{
    /** @var WeatherStation */
    private $weatherStation;

    /** @var int */
    private $temperatureInCelsius;

    /** @var int */
    private $precipitationInPercent;

    /** @var int */
    private $windInMeters;

    /**
     *
     * @param WeatherStation $weatherStation
     */
    public function __construct(WeatherStation $weatherStation)
    {
        $this->weatherStation = $weatherStation;
        $this->temperatureInCelsius = $weatherStation->getTemperatureInCelsius();
        $this->precipitationInPercent = $weatherStation->getPrecipitationInPercent();
        $this->windInMeters = $weatherStation->getWindInMetersPerSecond();
    }

    public function display() {
        echo "| The Surfs Weather Board update |\n";
        echo "| T: {$this->temperatureInCelsius} °C," .
            " P: {$this->precipitationInPercent}%," .
            " W: {$this->windInMeters} m/s.    |\n\n";
    }

    public function update()
    {
        $newTemperatureInCelsius = $this->weatherStation->getTemperatureInCelsius();
        $newPrecipitationInPercent = $this->weatherStation->getPrecipitationInPercent();
        $newWindInMeters = $this->weatherStation->getWindInMetersPerSecond();

        $temperatureHasChanged = $newTemperatureInCelsius !== $this->temperatureInCelsius;
        $precipitationHasChanged = $newPrecipitationInPercent !== $this->precipitationInPercent;
        $windHasChanged = $newWindInMeters !== $this->windInMeters;

        if ($temperatureHasChanged) {
            $this->temperatureInCelsius = $newTemperatureInCelsius;
        }

        if ($precipitationHasChanged) {
            $this->precipitationInPercent = $newPrecipitationInPercent;
        }

        if ($windHasChanged) {
            $this->windInMeters = $newWindInMeters;
        }

        if ($temperatureHasChanged || $precipitationHasChanged || $windHasChanged) {
            $this->display();
        }
    }
}
