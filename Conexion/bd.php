<?php 

// Iniciando sesion
session_start();

$host = "localhost";
$usuario = "root";
$clave = "";
$database = "bdtareas";

$conexion = mysqli_connect($host,$usuario,$clave,$database);

// if(isset($conexion)){
//     echo "Success";
// }

?>