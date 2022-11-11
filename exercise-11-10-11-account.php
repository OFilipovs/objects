<?php
require_once "Account.php";
$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state" . PHP_EOL;
echo $bartos_account->balance() . PHP_EOL;
echo $bartos_swiss_account->balance() . PHP_EOL;

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->balance() . PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->balance() . PHP_EOL;

echo "Final state" . PHP_EOL;
echo $bartos_account->balance() . PHP_EOL;
echo $bartos_swiss_account->balance() . PHP_EOL;

$mattsAccount = new Account("Matts account", 1000);
$myAccount = new Account("My account", 0);

$mattsAccount->withdrawal(100);
$myAccount->deposit(100);

echo $mattsAccount->getName() . ": " . $mattsAccount->balance() . PHP_EOL;
echo $myAccount->getName() . ": " . $myAccount->balance() . PHP_EOL;

$A = new Account("A", 100.0);
$B = new Account("B", 0.0);
$C = new Account("C", 0.0);

$A->transfer($A, $B, 50.00);
$A->transfer($A, $C, 25.0);

echo $A->balance() . " " . $B->balance() . " " . $C->balance() . PHP_EOL;
