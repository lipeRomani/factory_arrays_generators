<?php

spl_autoload_register(function($class){
    require $class . ".php";
});

$guests = [
    new Guest("Spider Man"),
    new Guest("Iron Man"),
    new Guest("Hulk"),
    new Guest("Thor")
];

$onlyNames = ["Spider", "Thor", "Hulk", "Thor"];

$processor = new GuestProcessor();

//Processara todos elementos do array
//$processor->process(...$guests);

//Dara um erro pois os tipos são diferentes
//$processor->process(...$onlyNames);

//Será um array de uma única posição
//$processor->process(new Guest("America"));