<?php
    class FAcademy extends Monoplaza {
        private $potenciaMaxima;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoPlaza, $escuderia, $cantPuntosCategoria, $potenciaMaxima){
            parent::__construct($nombrePiloto, $pilotoNacionalidad, $numMonoPlaza, $escuderia, $cantPuntosCategoria);
            $this->potenciaMaxima = $potenciaMaxima;
        }

        public function subirCategoria(int $potenciaMaxima){
            $nuevoMonoplaza = new F4(
                $this->nombrePiloto,
                $this->pilotoNacionalidad,
                $this->numMonoPlaza,
                $this->escuderia,
                $this->cantPuntosCategoria,
                $this->potenciaMaxima
            );
        }

        public function __toString(){
            return 
            parent::__toString() . 
            "Potencia máxima del motor: " . $this->potenciaMaxima . "CV" . "<br><br>";
        }
    }
?>