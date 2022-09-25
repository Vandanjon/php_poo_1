<?php

require_once "Bicycle.php";

$bike = new Bicycle($color="blue");


var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

require_once "Car.php";

$tornado = new Car($color="red", $nbSeats=4, $energy="electricity");

var_dump($tornado);

echo $tornado->start();
echo "<br/>";
echo $tornado->forward();
echo $tornado->forward();
echo $tornado->forward();
echo "<br/>";
echo $tornado->brake();
echo "<br/>";

$old_car = new Car($color="dusty", $nbSeats=2, $energy="gasoil");

var_dump($old_car);

echo "Let's change tornado color! <br/>";
echo "Tornado is " . $tornado->getColor() . "<br/>";
echo "<i>*brush*</i><br/>";
$tornado->setColor("blue");
echo "Now Tornado is " . $tornado->getColor() . "<br/>";