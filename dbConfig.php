<?php
// Datos de conexión a la base de datos
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'db_Theme'; // <--- Aquí debe coincidir con phpMyAdmin

// Crear conexión y seleccionar la base de datos
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar si hubo error en la conexión
if ($db->connect_error) {
    die("No se pudo conectar a la base de datos: " . $db->connect_error);
}
?>