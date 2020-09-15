<?php 
    include("Conexion/bd.php");

    if(isset($_GET["id"])){
        // echo "se obtuvo el id ".$_GET['id'];
        $id = $_GET["id"];

        $consulta = "DELETE FROM tarea WHERE id=$id";
        mysqli_query($conexion,$consulta);

        header("Location: index.php");
    }
    // $id = $_GET["id"];

    // $consulta = "DELETE FROM tareas WHERE id=$id";





?>