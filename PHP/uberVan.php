<?php
require_once('car.php');
require_once 'drver.php';
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, Drver $driver, $typeCarAccepted, $seatsMaterial){
        parent::__construct($license,$driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
    public function setPassenger($passenger){
    if($passenger == 6){
        $this->passenger = $passenger;
    }else{
        echo "<br>Necesitas asignar seis pasajeros";
    }
    }
}
?>