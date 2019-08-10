<?php

namespace ObserverPattern;

class WeatherStation implements Observable
{
    use ObservableTrait;

    /** @var int */
    private $temperatureInCelsius;

    /** @var int */
    private $precipitationInPercent;

    /** @var int */
    private $windInMetersPerSecond;

    /** @var int */
    private $cloudsInPercent;

    public function __construct(
        int $temperatureInCelsius,
        int $precipitationInPercent,
        int $windInMetersPerSecond,
        int $cloudsInPercent
    ) {
        $this->temperatureInCelsius = $temperatureInCelsius;
        $this->precipitationInPercent = $precipitationInPercent;
        $this->windInMetersPerSecond = $windInMetersPerSecond;
        $this->cloudsInPercent = $cloudsInPercent;
    }

    /**
     * @return int
     */
    public function getTemperatureInCelsius(): int
    {
        return $this->temperatureInCelsius;
    }

    /**
     * @return int
     */
    public function getPrecipitationInPercent(): int
    {
        return $this->precipitationInPercent;
    }

    /**
     * @return int
     */
    public function getWindInMetersPerSecond(): int
    {
        return $this->windInMetersPerSecond;
    }

    /**
     * @return int
     */
    public function getCloudsInPercent(): int
    {
        return $this->cloudsInPercent;
    }

    /**
     * @param int $temperatureInCelsius
     */
    public function updateTemperatureInCelsius(int $temperatureInCelsius)
    {
        $this->temperatureInCelsius = $temperatureInCelsius;
        $this->notifyObservers();
    }

    /**
     * @param int $temperatureInCelsius
     * @param int $precipitationInPercent
     * @param int $windInMetersPerSecond
     * @param int $cloudsInPercent
     */
    public function updateWeather(
        int $temperatureInCelsius,
        int $precipitationInPercent,
        int $windInMetersPerSecond,
        int $cloudsInPercent
    ) {
        $this->temperatureInCelsius = $temperatureInCelsius;
        $this->precipitationInPercent = $precipitationInPercent;
        $this->windInMetersPerSecond = $windInMetersPerSecond;
        $this->cloudsInPercent = $cloudsInPercent;
        $this->notifyObservers();
    }
}
