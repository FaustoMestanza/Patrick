<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $opciones = $_POST['opciones'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO nombre_de_tu_tabla (nombre, cedula, correo, telefono, opciones, mensaje)
            VALUES ('$nombre', '$cedula', '$correo', '$telefono', '$opciones', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>