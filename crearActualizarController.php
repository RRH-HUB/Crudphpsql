<?php
include("includes/conexion.php");

if (isset($_POST['actualizar'])) {
    $temp = $_POST['id'];
    $id = (int) $temp;
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    $sql = "UPDATE tareas SET nombre = '$titulo', descripcion = '$descripcion' WHERE id='$id'";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        $_SESSION['actualizar'] = 'Tarea actualizada con exito';
        header("Location:views/listarTareas.php");
    } else {
        header("Location:views/ListarTareas.php");
    }
} else {

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO tareas(nombre, descripcion) VALUES('$titulo', '$descripcion' )";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        $_SESSION['creada'] = 'Tarea guardada con exito';
        header("Location:views/crear.php");
    } else {
        header("Location:views/crear.php");
    }
}
