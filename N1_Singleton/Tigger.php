<?php

class Tigger {

     private static ?Tigger $instance = null; 
     private static int $totalVecesRoar = 0;  //hago static para que sume el total de veces que todos los Tigger rugieron !
                                              //para hacer que el contador sea individual a cada objeto creado, no seria static y seria $this->totalVecesRoar en el metodo roar()
       
     private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
           self::$totalVecesRoar++;  
          echo "Grrr!" . PHP_EOL;
       }
         

        public static function getInstance() : Tigger{
            if (self::$instance === null) {
                 self::$instance = new Tigger();
                }
                return self::$instance;
        }

        public function getCounter(): int {
            return self::$totalVecesRoar;
        }

}