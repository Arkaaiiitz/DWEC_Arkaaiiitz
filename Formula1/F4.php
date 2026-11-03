<?php
    class F4 extends Monoplaza {
        private $paisCategoria;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoPlaza, $escuderia, $cantPuntosCategoria, $paisCategoria){
            parent::__construct($nombrePiloto, $pilotoNacionalidad, $numMonoPlaza, $escuderia, $cantPuntosCategoria);
            $this->paisCategoria = $paisCategoria;
        }

        public function subirCategoria(String $paisCategoria){
            $nuevoMonoplaza = new F3(
                $this->nombrePiloto,
                $this->pilotoNacionalidad,
                $this->numMonoPlaza,
                $this->escuderia,
                $this->cantPuntosCategoria,
                $this->paisCategoria
            );
        }

        public function __toString(){
            return 
            parent::__toString() .
            "País de la categoría: " . $this->paisCategoria . "<br><br>";
        }
    }
?>