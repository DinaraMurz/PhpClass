<?php

class MyClass
{
    private $name;
    private $age;
    protected $money;

    function __construct()
    {
        echo "I exist";
    }

    public function doAction($action)
    {
        echo $action . "is done";
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function setMoney($money)
    {
        $this->money = $money;
    }

}