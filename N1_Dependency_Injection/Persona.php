<?php

class Persona {

    private array  $objetos;

    public function __construct(array $objetos) {
        $this->objetos = $objetos;
    }

    public function agarrarObjetosAntesDeSalirDeCasa()  {
        foreach ($this->objetos as $objeto) {
            echo "- " . $objeto->cogerObjeto() . "\n";
        }
    }
        
}