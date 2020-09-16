<?php
include("Conexion/bd.php");

// Si se envia el name guardar-nota por el metodo post entonces
if (isset($_POST["guardar-nota"])) {

    //Recibiendo variables a traves del metodo POST
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];

    //Escribiendo consulta
    $consulta = "INSERT INTO tarea(nombre, descripcion, fecha) VALUES ('$nombre','$descripcion','$fecha')";
    $resultado = mysqli_query($conexion, $consulta);
    // if('$resultado'){
    //     die("falied");
    // }

    //Variables de tipo sesion creadas
    $_SESSION["mensaje"] = "Tarea guardada";
    $_SESSION["color_mensaje"] = "success";

    header("Location: index.php");
}
