<?php
    class F3 extends Monoplaza {
        private $nombreAcademia;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria, $nombreAcademia){
            parent::__construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria);
            $this->nombreAcademia = $nombreAcademia;
        }

        public function subirCategoria(String $nombreAcademia){
            $nuevoMonoplaza = new F2(
                $this->nombrePiloto,
                $this->pilotoNacionalidad,
                $this->numMonoPlaza,
                $this->escuderia,
                $this->cantPuntosCategoria,
                $this->nombreAcademia
            );
        }

        public function __toString(){
            return 
            parent::__toString() .  
            "Nombre de la academia: " . $this->nombreAcademia . "<br><br>";
        }
    }
?>