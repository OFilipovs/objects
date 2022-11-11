<?php

class Account
{
    private string $name;
    private float $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function balance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function withdrawal(float $amount){
        $this->balance -= $amount;
    }

    public function deposit(float $amount){
        $this->balance += $amount;
    }

    public function transfer(Account $from, Account $to, int $howMuch){
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }
}