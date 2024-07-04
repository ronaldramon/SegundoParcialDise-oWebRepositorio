<?php
$host = "localhost";
$dbname = "proyectodiseñoweb";
$user = "root";
$pass = "";

 $conn = new mysqli($host, $user, $pass, $dbname);
 $query="SELECT * FROM productosTabla";

 // Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>