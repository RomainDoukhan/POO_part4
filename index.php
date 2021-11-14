<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';
require_once 'HomersCar.php';

$bike = new Bicycle('blue', 1);
echo $bike->forward();
var_dump($bike);

$auto = new Car('green', 4, 'electric');
echo $auto->forward();
var_dump($auto);
var_dump(Car::ALLOWED_ENERGIES);

$camion = new Truck('red', 5, 100, 60);
echo $camion->forward();
var_dump($camion);
var_dump(Truck::ALLOWED_ENERGIES);

$homerscar = new HomersCar('blue', 4, 'electric');
$homerscar->setHasParkBrake(true);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo $auto->forward();
echo '<br> Vitesse de la voiture : ' . $auto->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto->brake();
echo '<br> Vitesse de la voiture : ' . $auto->getCurrentSpeed() . ' km/h' . '<br>';
echo $auto->brake();

echo $camion->forward();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();

echo $camion->capacity();
echo '<br> Le chargement du camion : ' . $camion->getLoading() . ' litres' . '<br>';
echo $camion->loading();
echo '<br> Le chargement du camion : ' . $camion->getLoading() . ' litres' . '<br>';
echo $camion->loading();

try {
    $homerscar->start();
} catch (Exception $exception) {
    $homerscar->setHasParkBrake(false);
    echo $exception->getMessage();
} finally {
    echo "Ma voiture roule comme un donut";
}
