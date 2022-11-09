<?php

class BankAccount
{
     private string $name;
     private float $balance;

     public function __construct($name, $balance)
     {
         $this->name = $name;
         $this->balance = $balance;
     }

    public function show_user_name_and_balance(){
         if ($this->balance < 0){
             $formatted = number_format($this->balance * -1, 2, ".", " ");
             return $this->name . ", " . "-" . "$" . $formatted;
         } else {
             $formatted = number_format($this->balance, 2, ".", " ");
             return $this->name . "," . "$" . $formatted;
         }

    }
    public function getName(): string
    {
        return $this->name;
    }


    public function getBalance(): float
    {
        return $this->balance;
    }
}