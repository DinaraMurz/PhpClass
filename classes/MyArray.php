<?php


class MyArray
{
    public  $arr;

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public  function addItem($item){
        $this->arr[] = $item;
    }

    public function printArray(){
        $min = "-";
        $this->goArray($min, $this->arr);
    }

    public function  goArray($min,$arr){
        foreach ($arr as $item)  {
            if (is_array($item)) {
                $min .= "-";
                $this->goArray($min, $item);
            }
            else {
                $min[count($min)] = "";
                echo $min . $item . "<br>";
            }
        }

    }

}