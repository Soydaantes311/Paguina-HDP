<?php
$servername = "localhost";

$username = "root";
$password = "";
$database = "tecnoutma";


// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database, );

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo"conectado";
}
?>