<?php include("../includes/conexion.php") ?>
<?php include("../includes/header.php") ?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="..\index.php" class="navbar-brand">Php Mysql CRUD with Bootstrap</a>
        <a href="crear.php" class="navbar-brand">Tarea nueva</a>
    </div>
</nav>
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($_SESSION['actualizar'])) { ?>
                <div class="alert alert-warning alert-dismissible">
                    <?= $_SESSION['actualizar'] ?>
                    <?php session_unset(); ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['borrada'])) { ?>
                <div class="alert alert-danger alert-dismissible">
                    <?= $_SESSION['borrada'] ?>
                    <?php session_unset(); ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <?php include("../listarController.php") ?>
        </div>
    </div>
</div>
<div class="row">
    <?php include("../includes/footer.php") ?>
</div>