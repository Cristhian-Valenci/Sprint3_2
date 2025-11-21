<?php 

require_once "Objeto.php";
require_once "Llaves_de_coche.php";
require_once "Llaves_de_casa.php";
require_once "Smartphone.php";  
require_once "Verificar_objetos.php";
require_once "Contenedor.php";


$tipoDeObjeto = [
      "Llaves de casa",
      "Llaves de coche",
      "Smartphone"
];

$conteiner = new Contenedor();

foreach($tipoDeObjeto as $objeto) {
    
    $verificar = $conteiner->crearVerificadorDeObjetos($objeto);

    echo $verificar->verificarObjetos() . PHP_EOL;
}

