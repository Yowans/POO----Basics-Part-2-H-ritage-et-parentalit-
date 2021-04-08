<?php
	require_once ('Car.php');
	require_once ('Bicycle.php');
	require_once ('Truck.php');

	$homerSedan = new Car('rose', 4, 'essence');
	echo $homerSedan->start() . PHP_EOL;
	echo $homerSedan->forward() . PHP_EOL;
	echo 'Homer roule à ' . $homerSedan->getCurrentSpeed() . 'Km/h il accélère jusqu\'à ';
	$homerSedan->setCurrentSpeed(200);
	echo $homerSedan->getCurrentSpeed() . 'Km/h mais il voit une voiture devant et panique !!!' . PHP_EOL;
	echo $homerSedan->brake() . PHP_EOL;

	echo PHP_EOL;

	$margeStationWagon = new Car('orange', 5, 'essence');
	echo 'La voiture de Marge était ' . $margeStationWagon->getColor() . ' avant son accident, ';
	$margeStationWagon->setColor('rouge');
	echo 'Elle à était repeinte en ' . $margeStationWagon->getColor() . ' après les réparations' . PHP_EOL;

	echo PHP_EOL;

	$krustyPorsch = new Car('grise', 2, 'electricité');
	echo 'La Porsh ' . $krustyPorsch->getColor() . ' de Krusty à ' . $krustyPorsch->getNbSeats() . ' places et fonctionne à l\'' . $krustyPorsch->getEnergy() . '!' . PHP_EOL;

	echo PHP_EOL;

	$bartBike = new Bicycle('rouge', 1);
	echo $bartBike->forward() . PHP_EOL;
	echo 'Bart roule à ' . $bartBike->getCurrentSpeed() . 'Km/h il accélère jusqu\'à ';
	$bartBike->setCurrentSpeed(20);
	echo $bartBike->getCurrentSpeed() . 'Km/h jusqu\'à arriver chez lui alors il ' . PHP_EOL;
	echo $bartBike->brake() . PHP_EOL;

	echo PHP_EOL;

	$maggieBike = new Bicycle('vert', 1);
	$maggieBike->setNbWheels(3);
	$maggieBike->setHasLuggageRack(true);
	echo 'Maggie à un vélo à ' . $maggieBike->getNbWheels() . ' roues car elle apprend à en faire, il s\'agit donc d\'un tricycle. Son vélo à ' . $maggieBike->getHasLuggageRack() . ' panier!' . PHP_EOL;

	echo PHP_EOL;

	$homerTruck = new Truck('red', 2, 'essence',32);
	echo 'Le camion de Homer peut porter ' . $homerTruck->getCapacity() . 'T et il actuellement il en transporte' . $homerTruck->getCurrentCharge() . PHP_EOL;
	echo $homerTruck->start() . PHP_EOL;
	echo $homerTruck->forward() . PHP_EOL;
	echo 'Homer roule à ' . $homerSedan->getCurrentSpeed() . 'Km/h il accélère jusqu\'à ' . PHP_EOL;
	$homerTruck->setCurrentSpeed(70);
	echo $homerTruck->getCurrentSpeed() . 'Km/h il se rend compte qu\'il a oublié sa cargaison de Combustible Nucléaire !!!' . PHP_EOL;
	echo $homerTruck->brake() . PHP_EOL . 'Il fait demi tour chercher ça cargaison, une fois arrivé il charge la cargaison.' . PHP_EOL;
	$homerTruck->setCurrentCharge(30);
	echo 'Son camion est chargé à ' . $homerTruck->getCurrentCharge() . 'T. ' . $homerTruck->isFull() . ' Il peut mettre encore 2 tonnes alors il en charge 3 !' . PHP_EOL;
	$homerTruck->setCurrentCharge(33);
	echo $homerTruck->isFull() . ' Homer repart.';
