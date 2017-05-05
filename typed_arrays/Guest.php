<?php

class Guest {
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function printName(){
        echo $this->name . "\n";
    }
}