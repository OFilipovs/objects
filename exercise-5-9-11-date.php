<?php

require_once "Date.php";

$today = new Date(9, 11, 2022);

echo $today->diplayDate() . PHP_EOL;

$today->changeDate(10,11,2023);

echo $today->diplayDate();