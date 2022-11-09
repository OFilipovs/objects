<?php

require_once "Dog.php";
require_once "DogTest.php";

$list = [
    ["Max", "male"],
    ["Rocky", "male"],
    ["Sparky", "male"],
    ["Buster", "male"],
    ["Sam", "male"],
    ["Lady", "female"],
    ["Molly", "female"],
    ["Coco", "female"]
];
$dogs = [];
foreach ($list as $dog){
    [$name, $sex] = $dog;
    $name = new DogTest(
        new Dog($name, $sex)
    );

    $dogs[] = $name;
}

echo $dogs[3]->getDog()->getFather() . PHP_EOL;
echo $dogs[7]->getDog()->getFather() . PHP_EOL;

echo $dogs[7]->getDog()->hasSameMotherAs($dogs[1]->getDog());



