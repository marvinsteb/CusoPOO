<?php
require_once('car.php');
require_once 'drver.php';
class UberX extends car{
  public $brand;
  public $model;
  public function __construct(String $licence, Drver $driver, $brand, $model)
  {
    parent::__construct($licence,$driver);
    $this->brand = $brand;
    $this->model = $model;
  }
  public function printDataCar(){
    parent::printDataCar();
    echo "<br>Brand: {$this->brand} <br> Model: {$this->model} ";
 }
}