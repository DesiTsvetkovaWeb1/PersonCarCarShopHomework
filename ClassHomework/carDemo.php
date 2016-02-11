<?php

require_once 'autoload.php';

$name1= new Person();
$name2= new Person();
$car1 = new Car();
$car2 = new Car();

$name1->setName('Ivan');
$name1->setAge('27');

$name2->setName('Georgi');
$name2->setAge('30');


$car1->setModel('Audi');
$car1->setMaxSpeed('200');
$car1->setCurrentSpeed('80');
$car1->setColor('black');
$car1->setOwner($name1);

$car2->setModel('Opel');
$car2->setMaxSpeed('180');
$car2->setCurrentSpeed('75');
$car2->setColor('red');
$car2->setOwner($name2);


$car1->acceletate('65');
$car1->changeGear('3');
$car1->changeGearUp();
$car1->changeColor('blue');

$car2->acceletate('40');
$car2->changeGear('2');
$car2->changeGearDown();

echo $car1->getInfo(), PHP_EOL;
echo $car2->getInfo(), PHP_EOL;
echo 'Owner of car1 is '.$car1->getOwnerName().' and his age is: '. $car1->getOwnerAge(),PHP_EOL; 

$name1->setFriend('Angel','33');
echo 'Ivan\'s friend is: '. $name1->getFriendName(). ' and his age is: '.$name1->getFriendAge();

