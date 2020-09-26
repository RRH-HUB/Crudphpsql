<?php include("includes/conexion.php") ?>
<?php include("includes/header.php") ?>
<?php include("includes/navbar.php") ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md4">
            <?php if (isset($_SESSION['exito'])){ ?>
                <div class="alert alert-success alert-dismissible">
                    <?= $_SESSION['exito']?>
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php session_unset(); } ?>
            <div class="card card-body">
                <form action="crear.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo de la tarea.." autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion de la tarea.."></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="crear" value="crear">
                    <button class="btn btn-warning" name="actualizar" value="actualizar"><a href="actualizar.php">Actualizar</a></button>
                    <button class="btn btn-danger" name="borrar" value="borrar"><a href="actualizar.php">Borrar</a></button>     
                    <?var_dump($message)?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>
