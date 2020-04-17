<?php
// index.php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle('bleue',15);
$mustang = new Car('noire',2,'fuel');
$bmw = new Car('blanche',5,'electric');
$bicycle = new Bicycle('blue', 1);
$monster = new Truck('red',8,'fuel',500);
echo $monster->is_full();
$monster->setchargement(500);
echo $monster->is_full();
echo $monster->forward();
echo $monster->brake();
$road66 = new MotorWay();
$road66->addVehicle($bmw);
$road66->addVehicle($bicycle);
echo '<pre>';
var_dump($road66);
echo '</pre>';
echo ' NOUVELLE QUETE POO4 ';
$mustang->setParkBrake(1);
echo $mustang->isHasParkBrake();
$mustang->setParkBrake(0);
echo $mustang->isHasParkBrake();
$mustang->setParkBrake(1);
echo $mustang->isHasParkBrake();
echo '</br>';
try {
    echo $mustang->start();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
    $mustang->setParkBrake(0);
    echo 'J\'enlève le frein à main' . '</br>';
} finally {
    echo 'Ma voiture roule comme un donut' . '</br>';
}
echo $mustang->isHasParkBrake();

