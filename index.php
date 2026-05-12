<?php
$servername = "db";
$username = "root";
$password = getenv('ROOT_PASSWORD');

// Crear la conexión
$conn = new mysqli($servername, $username, $password);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
echo "¡Conexión exitosa a la base de datos!";
?>
