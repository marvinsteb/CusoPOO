<?php
require_once 'car.php';
require_once 'uberX.php';
require_once 'uberVan.php';
require_once 'account.php';
require_once 'drver.php';
require_once 'user.php';
$car = new UberX("HDS2143",new Drver("marvin menchu", "LM2324", "m@gmail.com", "psw123456"),"honda","civic");
$car->setPassenger(4);
$car->printDataCar();
echo "<br>Data driver";
$car->driver->printDataAccount();
$user = new User("esteban menchu", "ADF1235", "e@gmail.com","psw654");
$user->printDataAccount();


$uberVan = new UberVan("OJL395", new Drver("esteban", "AND456","e@gmail.com","pswd"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();