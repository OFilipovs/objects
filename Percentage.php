<?php

class Percentage
{
    private float $surveyed = 12467;
    private float $purchased_energy_drinks = 0.14;
    private float $prefer_citrus_drinks = 0.64;

    /**
     * @return float
     */
    public function getSurveyed(): float
    {
        return $this->surveyed;
    }

    /**
     * @return float
     */
    public function getPreferCitrusDrinks(): float
    {
        return $this->prefer_citrus_drinks;
    }

    /**
     * @return float
     */
    public function getPurchasedEnergyDrinks(): float
    {
        return $this->purchased_energy_drinks;
    }

    public function calculateCount ($percentageOfSomething, $totalAmount): float {
        return $totalAmount * $percentageOfSomething;
    }
}