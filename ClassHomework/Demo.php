<?php

require_once 'autoload.php';

$person = new Person('Angel', '123456', 'male', '16000');
$newOwner = new Person ('Ivan', '1236', 'male', '6000');


$car = new Car('Opel', 'yes', 'white', '5000', '180');
$car1 = new Car('Audi', 'no', 'black', '2000', '220');
$car2 = new Car('Seat', 'yes', 'blue', '3800', '200');
$carShop = new CarShop($car);

echo $person->getName(). ' personal number is ' . $person->getPersonalNumber(). ' and he is ' .$person->getIsMale(), PHP_EOL;

echo 'The car is ' . $car->getModel(). '. Color is: ' . $car->getColor() . '. Price is: ' . $car->getPrice() . '. Max speed is: ' . $car->getMaxSpeed() . '. Sport car: ' .$car->getIsSportCar(), PHP_EOL;

echo 'The price for scrap is: ' . $car->calculateCarPriceForScrap(600), PHP_EOL;

echo $person->byeCar($car), PHP_EOL;

echo $person->sellCarForScrap(600), PHP_EOL;

echo $person->byeCar($car), PHP_EOL;

echo $person->changeOwner($newOwner);
var_dump($newOwner); 

$carShop->addCar($car);
$carShop->addCar($car1);
$carShop->addCar($car2); 

$carShop->getNextCar();
$carShop->sellNextCar($person);
$carShop->showAllCarsInTheShop();
$carShop->sellNextCar($person);
$carShop->showAllCarsInTheShop();


