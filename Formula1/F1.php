<?php
    class F1 extends Monoplaza {
        private $nombrePatrocinadorPrincipal;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria, $nombrePatrocinadorPrincipal){
            parent::__construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria);
            $this->nombrePatrocinadorPrincipal = $nombrePatrocinadorPrincipal;
        }

        public function __toString(){
            return 
            parent::__toString() .  
            "Nombre del patrocinador principal: " . $this->nombrePatrocinadorPrincipal . "<br><br>";
        }
    }
?>