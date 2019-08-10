<?php

namespace ObserverPattern;

interface Observable
{
    /**
     * @param Observer $observer
     */
    public function add(Observer $observer);

    /**
     * @param Observer $observer
     */
    public function remove(Observer $observer);

    public function notify();
}
