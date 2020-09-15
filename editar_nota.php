<?php
    include("Conexion/bd.php");

    // if(isset($_GET["id"])){
    //     echo "ok";
    // }
    if (isset($_GET["id"])) {

        $id = $_GET["id"];
        $consulta = "SELECT * FROM tarea where id=$id";
        $resultado_tarea = mysqli_query($conexion, $consulta);

        // Si el numero de filas de $resultado_tarea es igual a 1
        if (mysqli_num_rows($resultado_tarea) == 1) {
            //Obtener fila del $resultado_tarea y guardarlo en $fila
            $fila = mysqli_fetch_array($resultado_tarea);
            $nombre = $fila["nombre"];
            $descripcion = $fila["descripcion"];
            $fecha = $fila["fecha"];
        }

    }

    // Si se envia actualizar por medio del metodo post
    if(isset($_POST["actualizar"])){

        $id = $_GET["id"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $fecha = $_POST["fecha"];

        $consulta_actualizar = "UPDATE tarea SET nombre='$nombre', descripcion='$descripcion', fecha='$fecha' WHERE id=$id";
        mysqli_query($conexion,$consulta_actualizar);

        header("Location: index.php");
    }


?>

<?php include("header.php"); ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <!-- El $id se obtiene del metodo get -->
                    <form action="editar_nota.php?id=<?php echo $id; ?>" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Nombre" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" class="form-control" placeholder="Descripcion" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="date" name="fecha" value="<?php echo $fecha; ?>" class="form-control" placeholder="Fecha" autofocus>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="actualizar" value="Actualizar">
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>