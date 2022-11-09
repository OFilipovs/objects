<?php

require_once "SavingsAccount.php";

$savingsAccount = new SavingsAccount(
    floatval(readline("Enter amount for deposit into savings account: "))
);

$savingsAnnualRate = floatval(readline("For limited time only, you can enter your desired rate: "));

$timeInMonths = intval(readline("How long has the account been opened?: "));

$i = 1;


while ($i <= $timeInMonths){
    $savingsAccount ->deposit(floatval(readline("Enter amount deposited for month $i: ")))
                    ->subtract(floatval(readline("Enter amount withdrawn for $i: ")))
                    ->monthlyInterest($savingsAnnualRate);

    $i++;
}

echo "Total deposited: " . $savingsAccount->getTotalDeposit() . PHP_EOL;
echo "Total withdrawn: " . $savingsAccount->getTotalWithdraw() . PHP_EOL;
echo "Interest earned: " . $savingsAccount->getInterestEarned() . PHP_EOL;
echo "Ending balance: " . $savingsAccount->getSavings() . PHP_EOL;