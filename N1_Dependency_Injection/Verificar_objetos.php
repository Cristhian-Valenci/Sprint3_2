<?php

class VerificarObjeto {

    private Objeto $objeto;

    public function __construct(Objeto $objeto) {
        $this->objeto = $objeto;
    }

    public function verificarObjetos() : string {
        return $this->objeto->cogerObjeto();
    }
        
}