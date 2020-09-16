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
                            <td> <?php echo $fila["tarea"]; ?> </td>
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