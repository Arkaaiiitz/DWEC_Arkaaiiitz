<?php
    class F2 extends Monoplaza {
        private $minPuntosSuperlicencia;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria, $minPuntosSuperlicencia){
            parent::__construct($nombrePiloto, $pilotoNacionalidad, $numMonoplaza, $escuderia, $cantPuntosCategoria);
            $this->minPuntosSuperlicencia = $minPuntosSuperlicencia;
        }

        public function subirCategoria(int $minPuntosSuperlicencia){
            $nuevoMonoplaza = new F1(
                $this->nombrePiloto,
                $this->pilotoNacionalidad,
                $this->numMonoPlaza,
                $this->escuderia,
                $this->cantPuntosCategoria,
                $this->minPuntosSuperlicencia
            );
        }

        public function __toString(){
            if($this->minPuntosSuperlicencia == true){
                $respuesta = "Sí";
            } else {
                $respuesta = "No";
            }            return 
            parent::__toString() .  
            "¿Tiene el mínimo de puntos de superlicencia para subir a F1? " . $respuesta . "<br><br>";
        }
    }
?>