<?php

namespace ObserverPattern;

use ObserverPattern\WeatherStationObservers\SurfersWeatherBoardDisplay;
use ObserverPattern\WeatherStationObservers\TemperatureDisplay;
use ObserverPattern\WeatherStationObservers\WindDisplay;

class Client
{
    public function run()
    {
        $weatherStation = new WeatherStation(
            12,
            60,
            7,
            40
        );

        // Register Observers
        $weatherStation->registerObserver(new TemperatureDisplay($weatherStation));
        $weatherStation->registerObserver(new WindDisplay($weatherStation));
        $weatherStation->registerObserver(new SurfersWeatherBoardDisplay($weatherStation));

        // Unregister Observers
        $weatherStation->unregisterObserver(new WindDisplay($weatherStation));

        // Update state of Weather Station
        $weatherStation->updateTemperatureInCelsius(14);
        $weatherStation->updateTemperatureInCelsius(15);
        $weatherStation->updateTemperatureInCelsius(16);

        $weatherStation->updateWeather(
            22,
            50,
            6,
            30
        );

        $weatherStation->updateWeather(
            23,
            50,
            6,
            30
        );
    }
}
