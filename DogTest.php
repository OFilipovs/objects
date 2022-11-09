<?php

class DogTest
{
    private Dog $dog;
    private $dogsWithParents = [
        "Max" => ["mother" => "Lady", "father" => "Rocky"],
        "Coco" => ["mother" => "Molly", "father" => "Buster"],
        "Rocky" => ["mother" => "Molly", "father" => "Sam"],
        "Buster" => ["mother" => "Lady", "father" => "Sparky"]
    ];

    public function __construct($dog){   // Main method is it constructor
        if (array_key_exists($dog->getName(), $this->dogsWithParents)) {
            $dog->setFather($this->dogsWithParents[$dog->getName()]["father"]);
            $dog->setMother($this->dogsWithParents[$dog->getName()]["mother"]);
        }
        $this->dog = $dog;


    }



    public function getDog(): Dog
    {
        return $this->dog;
    }
}