<?php
require_once 'drver.php';
class Car {
 public $id;
 public $licence;
 public $driver;
 protected $passenger;
 public function __construct(String $licence, Drver $driver)
 {
   $this->licence = $licence;
   $this->driver = $driver;
 }
 public function printDataCar(){
   echo "<br>Data Car".
   "<br>  Licence " . $this->licence.
   "<br>  passengers " . $this->passenger;
   ;
 }
 public function getPassenger(){
   return $this->passenger;
 }
 public function setPassenger($passenger){
  if($passenger == 4){
    $this->passenger = $passenger;
  }else{
    echo "<br>Necesitas asignar cuatro pasajeros";
  }
 }
}