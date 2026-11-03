<?php
    function mostrarPiloto($numero) {
        $conexion = curl_init();

        curl_setopt_array($conexion, array(
            CURLOPT_URL => "https://api.openf1.org/v1/drivers?driver_number=" . $numero . "&session_key=latest",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30
        ));

        $datos = curl_exec($conexion);
        $errorConexion = curl_error($conexion);

        curl_close($conexion);

        if ($errorConexion) {
            echo "Error en la conexión: " . $errorConexion;
            return;
        }

        $piloto = json_decode($datos);

        if (empty($piloto)) {
            echo "No se han encontrado datos para el dorsal " . $numero;
            return;
        }

        echo "<h2>" . $piloto[0]->full_name . "</h2>";
        echo "Dorsal: " . $piloto[0]->driver_number . "<br>";
        echo "Escudería: " . $piloto[0]->team_name . "<br>";
        echo "Acrónimo: " . $piloto[0]->name_acronym . "<br>";
        echo "<img src='" . $piloto[0]->headshot_url . "' width='135'><br><br>";
    }

mostrarPiloto(16);
mostrarPiloto(44);
?>