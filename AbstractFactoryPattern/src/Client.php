<?php

namespace AbstractFactoryPattern;

use AbstractFactoryPattern\PizzaAbstractFactory\PeperoniAbstractFactory;
use AbstractFactoryPattern\PizzaAbstractFactory\ProsciuttoAbstractFactory;

class Client
{
    /** @var PeperoniAbstractFactory */
    private $peperoniAbstractFactory;

    /** @var ProsciuttoAbstractFactory */
    private $prosciuttoAbstractFactory;

    /**
     * @param PeperoniAbstractFactory $peperoniAbstractFactory
     * @param ProsciuttoAbstractFactory $prosciuttoAbstractFactory
     */
    public function __construct(
        PeperoniAbstractFactory $peperoniAbstractFactory,
        ProsciuttoAbstractFactory $prosciuttoAbstractFactory
    ) {
        $this->peperoniAbstractFactory = $peperoniAbstractFactory;
        $this->prosciuttoAbstractFactory = $prosciuttoAbstractFactory;
    }

    public function run()
    {
        echo "Creating Peperoni pizza:\n";
        $peperoniPad = $this->peperoniAbstractFactory->createPad();
        $peperoniSauce = $this->peperoniAbstractFactory->createSauce();
        $peperoniVegetable = $this->peperoniAbstractFactory->createVegetable();
        $peperoniMeat = $this->peperoniAbstractFactory->createMeat();

        echo 'Peperoni pizza price: ';
        echo $peperoniPad->getPricePerKg() . ' * ' . $peperoniPad->getKgPerPortion() . ' + ';
        echo $peperoniSauce->getPricePerKg() . ' * ' . $peperoniSauce->getKgPerPortion() . '+ ';
        echo $peperoniVegetable->getPricePerKg() . ' * ' . $peperoniVegetable->getKgPerPortion() . ' + ';
        echo $peperoniMeat->getPricePerKg() . ' * ' . $peperoniMeat->getKgPerPortion() . ' = ';

        $peperoniPrice = $peperoniPad->getPricePerKg() * $peperoniPad->getKgPerPortion() +
            $peperoniSauce->getPricePerKg() * $peperoniSauce->getKgPerPortion() +
            $peperoniVegetable->getPricePerKg() * $peperoniVegetable->getKgPerPortion() +
            $peperoniMeat->getPricePerKg() * $peperoniMeat->getKgPerPortion();

        echo round($peperoniPrice, 2). "\n";

        echo "\n";

        echo "Creating Prosciutto pizza:\n";
        $prosciuttoPad = $this->prosciuttoAbstractFactory->createPad();
        $prosciuttoSauce = $this->prosciuttoAbstractFactory->createSauce();
        $prosciuttoVegetable = $this->prosciuttoAbstractFactory->createVegetable();
        $prosciuttoMeat = $this->prosciuttoAbstractFactory->createMeat();

        echo 'Prosciutto pizza price: ';
        echo $prosciuttoPad->getPricePerKg() . ' * ' . $prosciuttoPad->getKgPerPortion() . ' + ';
        echo $prosciuttoSauce->getPricePerKg() . ' * ' . $prosciuttoSauce->getKgPerPortion() . '+ ';
        echo $prosciuttoVegetable->getPricePerKg() . ' * ' . $prosciuttoVegetable->getKgPerPortion() . ' + ';
        echo $prosciuttoMeat->getPricePerKg() . ' * ' . $prosciuttoMeat->getKgPerPortion() . ' = ';

        $prosciuttoPrice = $prosciuttoPad->getPricePerKg() * $prosciuttoPad->getKgPerPortion() +
            $prosciuttoSauce->getPricePerKg() * $prosciuttoSauce->getKgPerPortion() +
            $prosciuttoVegetable->getPricePerKg() * $prosciuttoVegetable->getKgPerPortion() +
            $prosciuttoMeat->getPricePerKg() * $prosciuttoMeat->getKgPerPortion();

        echo round($prosciuttoPrice, 2) . "\n";
    }
}
