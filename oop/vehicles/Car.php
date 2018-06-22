<?php

namespace Vehicles;

require_once 'VehicleBase.php';
require_once 'GPSTrait.php';

class Car extends VehicleBase implements \Serializable
  {

    use GPSTrait;
    public function move(){
      $this->startEngine() . '<br>';
      echo 'Car :  moving <br>';
    }


  public function startEngine()
  {
    return 'Car: start engine';
  }
  public function Serialize(){
    echo 'Serialize <br>';
    return $this->owner;
  }
  public function unserialize($serialized)
  {
      echo 'unserialize <br>';
      $this->owner = $serialized;
  }
}
