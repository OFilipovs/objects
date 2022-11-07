<?php

class Product {
    public $name;
    public $startPrice;
    public $amount;

    function __construct($name, $startPrice, $amount)
    {
        $this -> name = $name;
        $this -> startPrice = $startPrice;
        $this -> amount = $amount;
    }

    public function printProduct(){
        return $this->name . ", price " . $this->startPrice . ", amount " . $this->amount . PHP_EOL;
    }


}


$logitech = new Product("Logitech mouse", 70, 14);  // "Logitech mouse", 70.00 EUR, 14 units
$iphone = new Product("iPhone 5s", 999.99, 3); //"iPhone 5s", 999.99 EUR, 3 units
$epson = new Product("Epson EB-U05", 440.46, 1); // "Epson EB-U05", 440.46 EUR, 1 units

echo $logitech->printProduct();
echo $iphone->printProduct();
echo $epson->printProduct();


$logitech = new class {
    public function changeAmount($enterAmount){
        $this->amount = $enterAmount;
    }
};

$logitech->changeAmount(30);

echo $logitech->printProduct();