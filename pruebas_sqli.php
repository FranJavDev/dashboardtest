<?php

include "configdb.php";

$conexion = new mysqli($servidor, $usuario, $contraseña, $bbdd);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} else {
    echo "Conexión correcta";
}

echo "<br><br>";

$sql = "SELECT * FROM asignatura";

$resultado = $conexion->query($sql);

if (!$resultado) { // por si la consulta esta mal, util para esta prueba
    die("Error en la consulta: " . $conexion->error);
}

while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)) {
    foreach ($fila as $elemento) {
        echo $elemento . " ";
    }
    echo "<br>";
}


$conexion->close();

?>