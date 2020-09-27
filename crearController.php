<?php
include("includes/conexion.php");

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];


$sql = "INSERT INTO tareas(nombre, descripcion) VALUES('$titulo', '$descripcion' )";
$resultado=mysqli_query($conexion, $sql);
if($resultado){
    $_SESSION['creada']='Tarea guardada con exito';
    header("Location:views/crear.php");
}else{
    header("Location:views/crear.php");
}