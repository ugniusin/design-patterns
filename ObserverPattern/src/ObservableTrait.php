<?php

namespace ObserverPattern;

trait ObservableTrait
{
    /** @var Observer[] */
    private $observers = [];

    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer)
    {
        $this->observers []= $observer;
    }

    /**
     * @param Observer $observer
     */
    public function unregisterObserver(Observer $observer)
    {
        $index = \array_search($observer, $this->observers);

        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
