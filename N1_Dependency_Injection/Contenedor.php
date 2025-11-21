<?php 

Class Contenedor {

    public function crearObjeto($tipoDeObjeto) : Objeto {

        switch($tipoDeObjeto) {
            
            case "Llaves de casa":
                return new LlavesDeCasa();
            case "Llaves de coche":
                return new LlavesDeCoche();
            case "Smartphone":
                return new Smartphone();
        }
    }

    public function crearVerificadorDeObjetos($tipoDeObjeto) : VerificarObjeto {

        $objeto = $this->crearObjeto($tipoDeObjeto);

        return new VerificarObjeto($objeto);
    }
}