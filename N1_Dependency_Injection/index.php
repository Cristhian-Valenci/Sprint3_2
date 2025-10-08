<?php 

require_once "Objeto.php";
require_once "Llaves_de_coche.php";
require_once "Llaves_de_casa.php";
require_once "Smartphone.php";  
require_once "Verificar_objetos.php";

$objetos = [
      new LlavesDeCoche(),
      new LlavesDeCasa(),
      new Smartphone()
];

foreach($objetos as $objeto) {
    $verificar = new VerificarObjeto($objeto);
    echo $verificar->verificarObjetos() . PHP_EOL;
}

