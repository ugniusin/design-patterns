<?php

namespace ObserverPattern;

interface Observable
{
    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer);

    /**
     * @param Observer $observer
     */
    public function unregisterObserver(Observer $observer);

    public function notifyObservers();
}
