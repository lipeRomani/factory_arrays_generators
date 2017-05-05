<?php

spl_autoload_register(function($class){
    require $class . ".php";
});

$validator = BounceValidatorFactory::getInstance();

echo $validator->isActive();
echo $validator->validateEmail("felipearomani@gmail.com");