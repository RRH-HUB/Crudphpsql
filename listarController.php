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
                                <a class="btn btn-warning" href="/crudphpmysql/actualizarController.php?id= <?php echo $fila['id'] ?> ">Actualizar</a>
                                <a class="btn btn-danger" href="/crudphpmysql/borrarController.php?id= <?php echo $fila['id'] ?>">Borrar</a>
                            </td>
                        </tr>

<?php } ?>
                </tbody>
            </table>