<?php
include("includes/conexion.php");


$id=$_GET['id'];


$sql = "DELETE FROM tareas WHERE id='$id'";
$resultado=mysqli_query($conexion, $sql);
if($resultado){
    $_SESSION['borrada']='Tarea borrada con exito';
    header("Location:index.php");
}else{
    header("Location:index.php");
}