<?php

require_once __DIR__ . '/vendor/autoload.php';

use PizzaProject\NewYorkPizzaStore;

$pizzaStore = new NewYorkPizzaStore();

echo "Заказ пиццы 'Маргарита':" . PHP_EOL;
$pizzaStore->orderPizza('margherita');

echo PHP_EOL;

echo "Заказ пиццы 'Пепперони':" . PHP_EOL;
$pizzaStore->orderPizza('pepperoni');