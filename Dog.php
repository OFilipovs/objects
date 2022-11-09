<?php

class Dog
{
    private string $name;
    private string  $sex;
    private $mother;
    private $father;

    public function __construct($name, $sex, $mother = null, $father = null){
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }


    public function hasSameMotherAs(Dog $secondDog){
        return $this->mother === $secondDog->getMother() ? "true" : "false";
    }


    public function getMother()
    {
        return $this->mother;
    }

    public function getFather()
    {
        return $this->father === null ? "Unknown" : $this->father;
    }

    public function setFather($father): void
    {
        $this->father = $father;
    }


    public function setMother($mother): void
    {
        $this->mother = $mother;
    }

    public function getName(): string
    {
        return $this->name;
    }


    public function getSex(): string
    {
        return $this->sex;
    }
}