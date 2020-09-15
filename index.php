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
    </div>
</div>