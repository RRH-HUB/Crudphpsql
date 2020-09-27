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
        <div class="col-md-10">
            <?php if (isset($_SESSION['borrada'])) { ?>
                <div class="alert alert-success alert-dismissible">
                    <?= $_SESSION['borrada'] ?>
                    <?php session_unset(); ?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Creada en</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tareas ORDER BY created_at DESC";
                    $result = mysqli_query($conexion, $query);

                    while ($fila = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['descripcion'] ?></td>
                            <td><?php echo $fila['created_at'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="actualizar.php?id= <?php echo $fila['id'] ?> ">Actualizar</a>
                                <a class="btn btn-danger" href="borrar.php?id= <?php echo $fila['id'] ?>">Borrar</a>
                            </td>
                        </tr>

<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("../includes/footer.php") ?>
