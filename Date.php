<?php
 class Date
 {
     private int $day;
     private int $month;
     private int $year;

     public function __construct(int $day, int $month, int $year)
     {
         $this->day = $day;
         $this->month = $month;
         $this->year = $year;
     }

     public function getDay(): int
     {
         return $this->day;
     }


     public function getMonth(): int
     {
         return $this->month;
     }


     public function getYear(): int
     {
         return $this->year;
     }

     public function setDay(int $day): void
     {
         $this->day = $day;
     }

     public function setMonth(int $month): void
     {
         $this->month = $month;
     }

     public function setYear(int $year): void
     {
         $this->year = $year;
     }

     public function diplayDate (){
         return $this->getMonth() . " / " . $this->getDay() . " / " . $this->getYear();
     }

     public function changeDate($day, $month, $year){
         $this->setDay($day);
         $this->setMonth($month);
         $this->setYear($year);
     }

 }

