# POO----Basics-Part-2-H-ritage-et-parentalit-

<?php
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';

require_once 'Car.php';

$car = new Car('green', 4, 'electric');
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake(). '<br>';

require_once 'Truck.php';
$tanker = new Truck('white', 3, 'fuel', 34000);
echo $tanker->forward();
echo '<br> Vitesse du camion : ' . $tanker->getCurrentSPeed() . ' km/h' . '<br>';
echo $tanker->brake();
echo '<br> Vitesse du camion : ' . $tanker->getCurrentSpeed() . ' km/h' . '<br>';
echo $tanker->brake();
echo '<br> Chargement du camion: ' . $tanker->getLoading(). ' litres' . '<br>';
echo $tanker->loading(). '<br>';

?>
