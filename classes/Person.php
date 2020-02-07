<?php

class Person
{
    private $age;
    private $satiety;

    public function __construct($age)
    {
        $this->age = $age;
        $this->satiety = 100;
    }

    public function  growUp($time = 1){
        $this->age = $this->age + $time;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function spendTime($satiety){
        growUp();
        $this->satiety = $this->satiety - $satiety;
    }

    public function isHungry(){
        if($this->isHungry() > 40)
            return true;
        else
            return false;
    }

    public function eatFood($satiety){
        $this->satiety = $this->satiety+ $satiety;
    }

    public function isAlive(){
        if($this->satiety < 0 && $this->satiety > 100)
            return true;
        else
            return false;
    }
}