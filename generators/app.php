<?php

spl_autoload_register(function($class){
    require $class . ".php";
});

$dao = new ReportDao();

$iterator = $dao->getReport();

//Forma foreach
foreach($iterator as $dto) {
    echo $dto->getData() . "\n";
}

//forma While
// while($iterator->current()) {
//     $dto = $iterator->current();
//     echo $dto->getData() . "\n";
//     $iterator->next();
// }

# Diferente do return o yield continua a execuçào do metodo após a finalizar a collection percorrida.
# Generator Class Reference https://secure.php.net/manual/pt_BR/class.generator.php