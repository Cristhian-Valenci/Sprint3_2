<?php 

require_once "Objeto.php";
require_once "Llaves_de_coche.php";
require_once "Llaves_de_casa.php";
require_once "Smartphone.php";  
require_once "Persona.php";



$llavesDeCasa = New LlavesDeCasa();
$llavesDeCoche = New LlavesDeCoche();
$smartphone = New Smartphone();


$persona = New Persona ([
    $llavesDeCasa,
    $llavesDeCoche,
    $smartphone
]);

$persona->agarrarObjetosAntesDeSalirDeCasa();

