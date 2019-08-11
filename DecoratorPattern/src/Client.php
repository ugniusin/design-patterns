<?php

namespace DecoratorPattern;

use DecoratorPattern\Beverage\Coffee;
use DecoratorPattern\AddonDecorators\MilkDecorator;
use DecoratorPattern\AddonDecorators\ChocolateDecorator;
use DecoratorPattern\Beverage\Tea;

class Client
{
    public function run()
    {
        $coffee = new Coffee();

        $coffeeWithMilk = new MilkDecorator($coffee);
        $coffeeWithDoubleMilk = new MilkDecorator($coffeeWithMilk);
        $coffeeWithMilkAndChocolate = new ChocolateDecorator($coffeeWithMilk);

        $coffeeDescription = lcfirst($coffee->getDescription());
        echo "Coffee - $coffeeDescription";
        echo "Coffee costs: {$coffee->getCost()}\n";
        echo "Coffee with milk costs: {$coffeeWithMilk->getCost()}\n";
        echo "Coffee with 2x milk costs: {$coffeeWithDoubleMilk->getCost()}\n";

        echo "\n";

        $coffeeWithMilkAndChocolateDescription = lcfirst($coffeeWithMilkAndChocolate->getDescription());
        echo "Coffee with milk and chocolate - $coffeeWithMilkAndChocolateDescription";
        echo "Coffee with milk and chocolate costs: {$coffeeWithMilkAndChocolate->getCost()}\n";

        echo "\n";

        $tea = new Tea();

        $teaWithMilk = new MilkDecorator($tea);

        $teaDescription = lcfirst($tea->getDescription());
        echo "Tea - $teaDescription";
        echo "Tea costs: {$tea->getCost()}\n";

        echo "\n";

        $teaWithMilkDescription = lcfirst($teaWithMilk->getDescription());
        echo "Tea with milk - $teaWithMilkDescription";
        echo "Tea with milk costs: {$teaWithMilk->getCost()}\n";
    }
}
