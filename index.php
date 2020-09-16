<?php include("Conexion/bd.php") ?>
<?php include("header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <div class="card card-body">
                <form action="guardar_nota.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nota" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" rows="2" class="form-control" placeholder="Descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" name="fecha" class="form-control" placeholder="Fecha">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="guardar-nota" value="Guardar Tarea">
                </form>
            </div>

            <!-- Si existe la variable mensaje -->
            <?php if (isset($_SESSION["mensaje"])) { ?>
                <!-- Cambiando el color de la alerta mediante valor de la variable "color_mensaje" -->
                <div class="alert alert-<?php echo $_SESSION["color_mensaje"] ?> alert-dismissible fade show mt-2" role="alert">
                    <?php echo $_SESSION["mensaje"]; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- Libera todas las variables de sesión actualmente registradas -->
            <?php session_unset();
            } ?>

        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $consulta = "SELECT * FROM tarea";
                    $resultado = mysqli_query($conexion, $consulta);

                    // mysqli_fetch_array — Obtiene una fila de resultados como un array asociativo
                    while ($fila = mysqli_fetch_array($resultado)) {
                    ?>
                        <tr>
                            <td> <?php echo $fila["nombre"]; ?> </td>
                            <td> <?php echo $fila["descripcion"]; ?> </td>
                            <td> <?php echo $fila["fecha"]; ?> </td>
                            <td>


                                <a class="btn btn-secondary" href="editar_nota.php?id=<?php echo $fila['id'] ?>">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a class="btn btn-danger" href="eliminar_nota.php?id=<?php echo $fila['id'] ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
        </div>
    </div>

    <?php include("footer.php") ?>