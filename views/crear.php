<?php include("../includes/conexion.php") ?>
<?php include("../includes/header.php") ?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="../index.php" class="navbar-brand">Php Mysql CRUD with Bootstrap</a>
        <a href="listarTareas.php" class="navbar-brand">Mis tareas</a>
    </div>
</nav>
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['creada'])) { ?>
                <div class="alert alert-success alert-dismissible">
                    <?= $_SESSION['creada'] ?>
                    <?php session_unset(); ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <div class="card card-body">
                <form action="../crearActualizarController.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="titulo" class="form-control" placeholder="Titulo de la tarea.." autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion de la tarea.."></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" name="crear" value="crear">


                </form>
            </div>
        </div>
</div>        
<?php include("../includes/footer.php") ?>