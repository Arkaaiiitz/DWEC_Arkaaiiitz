<?php
    class Monoplaza {
        protected $nombrePiloto;
        protected $pilotoNacionalidad;
        protected $numMonoPlaza;
        protected $escuderia;
        protected $cantPuntosCategoria;

        public function __construct($nombrePiloto, $pilotoNacionalidad, $numMonoPlaza, $escuderia, $cantPuntosCategoria){
            $this->nombrePiloto = $nombrePiloto;
            $this->pilotoNacionalidad = $pilotoNacionalidad;
            $this->numMonoPlaza = $numMonoPlaza;
            $this->escuderia = $escuderia;
            $this->cantPuntosCategoria = $cantPuntosCategoria;
        }



        public function otorgarPuntos(int $posicion, bool $vueltaRapida){
            $cantidadPuntos = 0;
            
            if ($this->posicionValida($posicion) == false){
                return;
            }

            if ($vueltaRapida == true && $posicion <= 10){
                $cantidadPuntos = $cantidadPuntos + 1;
            }

            $this->cantPuntosCategoria = $this->cantPuntosCategoria + $cantidadPuntos;
        }

        public function posicionValida(int $numPosicion){
            $maxPosiciones = 30;
            
            switch(get_class($this)){
                case "F1":
                    $maxPosiciones = 22;
                    break;
                case "F2":
                    $maxPosiciones = 24;
                    break;
                case "F3":
                    $maxPosiciones = 30;
                    break;
                case "F4":
                    $maxPosiciones = 30;
                    break;
                case "FAcademy":
                    $maxPosiciones = 18;
                    break;
            }

            if ($numPosicion < 1 or $numPosicion > $maxPosiciones){
                return false;
            }

            return true;
        }

        public function __toString(){
            return 
            "Piloto: " . $this->nombrePiloto . "<br>" .  
            "Nacionalidad: " . $this->pilotoNacionalidad . "<br>" . 
            "Posición: " . $this->numMonoPlaza . "<br>" . 
            "Escuderia: " . $this->escuderia . "<br>" . 
            "Puntos: " . $this->cantPuntosCategoria . "<br>";

        }
    }
?>