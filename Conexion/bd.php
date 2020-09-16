<?php 

// Iniciando sesion
session_start();

$host = "localhost";
$usuario = "root";
$clave = "";
$database = "temporal_prueba";

$conexion = mysqli_connect($host,$usuario,$clave,$database);

// if(isset($conexion)){
//     echo "Success";
// }

?>