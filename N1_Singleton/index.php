<?php 

require_once "Tigger.php";


$tigger = Tigger::getInstance();
$tigger2 = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger2->roar();

echo "Tigger rugió " . $tigger->getCounter() . " veces." . PHP_EOL;



?>