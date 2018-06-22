<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class ToyCar extends VehicleBase
  {
    public function move(){

      $this->startEngine() . '<br>';
      echo 'Car :  moving <br>';
    }


  public function startEngine()
  {
    throw new \Exception('Engine not found');
  }
}
