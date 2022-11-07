<?php

class FuelGauge {
    private $max = 70;
    public $fuel;

    function __construct($fuel)
    {
        $this-> fuel = $fuel;
    }

    public function getAmount(){
        return $this->fuel . PHP_EOL;
    }

    public function  addFuel($fuelToAdd){
        if ($this->max > $this->fuel && $this-> max >= $this->fuel + $fuelToAdd){
            $this->fuel += $fuelToAdd;
        } else {
            return "No space";
        }

    }

    public function removeFuel(){
        if ($this -> fuel > 0){
            $this->fuel -= 1;
        } else {
            return "Empty!";
        }
    }
}

class Odometer {
    public $mileage;
    private $maxMileage = 999999;

    function __construct($mileage){
        $this-> mileage = $mileage;
    }

    public function currentMileage(){
        return $this->mileage;
    }

    public function increaseMileage ($amount){
        for ($i = 0; $i < $amount; $i++){
            $this->mileage += 1;
            if ($this->mileage >= $this->maxMileage){
                $this->mileage = 0;
                break;
            }
        }

    }

    public function decreaseFuel ($traveled, $fuelObject){
        $this->increaseMileage($traveled);

        $fuelObject->removeFuel();


    }

}

$fuelTank = new FuelGauge(40);
$odometer = new Odometer(100);

$fuelTank->addFuel(20);

echo $fuelTank->getAmount();
$i = 3;
while ($fuelTank->getAmount() > 0){
    $odometer->decreaseFuel(10, $fuelTank);
    $odometer->increaseMileage(10);
    echo $odometer->currentMileage().PHP_EOL;
    echo $fuelTank->getAmount().PHP_EOL;

}