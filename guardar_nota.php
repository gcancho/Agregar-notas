<?php 
    include("Conexion/bd.php");

    //Recibiendo variables a traves del metodo POST
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];

    //Escribiendo consulta
    $consulta = "INSERT INTO tarea(nombre, descripcion, fecha) VALUES ('$nombre','$descripcion','$fecha')";
    $resultado = mysqli_query($conexion,$consulta);
    // if('$resultado'){
    //     die("falied");
    // }

    header("Location: index.php");
    
?>