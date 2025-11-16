<?php

declare(strict_types=1);

namespace PizzaProject;

use PizzaStoreLib\Pizza;
use PizzaStoreLib\PizzaStore;
use PizzaStoreLib\Pizzas\MargheritaPizza;
use PizzaStoreLib\Pizzas\PepperoniPizza;
use PizzaStoreLib\Pizzas\HawaiianPizza;

class NewYorkPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'margherita' => new MargheritaPizza(),
            'pepperoni' => new PepperoniPizza(),
            'hawaiian' => new HawaiianPizza(),
            default => throw new \InvalidArgumentException("Неизвестный тип пиццы: $type"),
        };
    }
}