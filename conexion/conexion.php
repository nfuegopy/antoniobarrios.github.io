<?php
$servername = "curriculum.crxu9ywxqsbi.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "2019bboy";
$database = "portafolio";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>
