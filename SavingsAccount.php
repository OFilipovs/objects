<?php

class SavingsAccount
{
    private float $savings;
    private float $totalDeposit = 0;
    private float $totalWithdraw = 0;
    private float $interestEarned = 0;

    public function __construct($savings)
    {
        $this->savings = $savings;
    }

    public function subtract($takenOut): SavingsAccount
    {
        $this->totalWithdraw += $takenOut;
        $this->savings -= $takenOut;
        return $this;
    }

    public function deposit($deposited): SavingsAccount
    {
        $this->totalDeposit += $deposited;
        $this->savings += $deposited;
        return $this;
    }

    public function monthlyInterest($interest): SavingsAccount
    {
        $rate = $interest / 12;
        $forInterest = $this->savings;
        $this->savings += $this->savings * $rate;
        $this->interestEarned += $forInterest * $rate;
        return $this;
    }

    public function formatOutput($number){
        return "$" . number_format($number, 2, ".", ",");
    }


    public function getInterestEarned()
    {
        return $this->formatOutput($this->interestEarned);
    }
    public function getTotalWithdraw()
    {
        return $this->formatOutput($this->totalWithdraw);
    }
    public function getTotalDeposit()
    {
        return $this->formatOutput($this->totalDeposit);
    }
    public function getSavings()
    {
        return $this->formatOutput($this->savings);
    }


}