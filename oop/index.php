<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/Toycar.php';
use Vehicles\{Car , Truck , ToyCar};

try{

  echo 'Class ToyCar <br>';
  $toyCar = new ToyCar('Alex el manejador de toy car');
  $toyCar->move();
} catch (Exception $e) {
  echo 'This is a toy <br><br>';
} finally {
  echo 'finally<br><br>';
}



echo 'Class Car <br>';
$car = new Car('Alex');
$car->move();
echo 'GPS pos: ' . $car->getPos();
// echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br><br> Class Truck 1 :<br><br>';
$truck1 = new Truck('Max', 'Pickup');
$truck1->move();


echo '<br><br> Class Truck  2 :<br><br>';
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();
// echo 'Owner Truck: ' . $truck->getOwner();


echo '<br> Total Trucks: ' . Truck:: getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';
