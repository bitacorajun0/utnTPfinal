<?php
// Archivo para procesar el formulario y interactuar con la base de datos

// Conectar a la base de datos
require_once("/Integradora_Modulo_1/conexionDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $dato1 = $_POST["dato1"];
    // Agrega más variables según tus necesidades

    // Ejemplo de consulta y ejecución
    $sql = "INSERT INTO tu_tabla (campo1) VALUES ('$dato1')";
    if ($conn->query($sql) === TRUE) {
        echo "Datos insertados correctamente en la base de datos.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
