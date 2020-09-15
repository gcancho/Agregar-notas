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
                    <input type="submit" class="btn btn-success btn-block" name="guardar_tarea" value="Guardar Tarea">
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
                        </tr>
                    <?php
                    }
                    ?>
        </div>
    </div>