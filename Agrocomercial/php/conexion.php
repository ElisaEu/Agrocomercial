<?php

$servername = "localhost";
$database = "db";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexion fallo: " . mysqli_connect_error());
}
echo "Conexion exitosa";
?>