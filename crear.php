<?php
include("includes/conexion.php");

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];


$sql = "INSERT INTO tareas(nombre, descripcion) VALUES('$titulo', '$descripcion' )";
$resultado=mysqli_query($conexion, $sql);
if($resultado){
    $_SESSION['exito']='Tarea guardada con exito';
    header("Location:index.php");
}else{
    header("Location:index.php");
}