<?php

require_once "Percentage.php";

$energyDrinkers = new Percentage();

echo "Total number of people surveyed " . $energyDrinkers->getSurveyed().PHP_EOL;
echo "Approximately " . $energyDrinkers->calculateCount($energyDrinkers->getSurveyed(), $energyDrinkers->getPurchasedEnergyDrinks()) . " bought at least one energy drink" . PHP_EOL;
echo $energyDrinkers->calculateCount($energyDrinkers->calculateCount($energyDrinkers->getSurveyed(), $energyDrinkers->getPurchasedEnergyDrinks()), $energyDrinkers->getPreferCitrusDrinks()) . " of those " . "prefer citrus flavored energy drinks." .PHP_EOL;
