<?php

include_once "classes/MyClass.php";
include_once "classes/Person.php";
include_once "classes/MyArray.php";
include_once "classes/Tmp.php";


include_once "classes/Tag.php";
include_once "classes/Body.php";

$div = new Tag("div", []);

$link = new Tag("a", []);

$link->setAttribute('href', "https://google.com");
$link->appendBody("Hello World");

$div->setAttribute("style", "background: red;
                              width: 100px;
                              height: 100px;");
$div->appendBody($link);



echo $div;

/*
$myClass = new MyClass();

$myClass->doAction("clear dala");


$person = new Person(20);

while($person->isAlive()){
    $person->spendTime();
    if($person->isHungry()) {
        $person->eatFood(rand(20, 70));
        echo "dead";
    }
}
echo "dead";

$arr = new MyArray([1,[2,2,[3]],1]);


$arr->printArray();


$tmp = new Tmp();
//$tmp->doAction()->playGame();


include_once "classes/Tag.php";
include_once "classes/Body.php";

$tag = new Tag("a", ["href" => "#"]);
$tag->isSelfClosing;
$tag->appendBody("link");
print $tag->name;
echo $tag->getString();

$div= new Tag("div");
$link = new Tag("a");

$link->appendBody("HW");
$link->appendAttribute("href","https://google.com");
$div->appendBody($link);




echo $div;*/