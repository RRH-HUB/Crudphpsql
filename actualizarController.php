<?php
include("includes/conexion.php");
$id=$_GET['id'];

echo "$id";
$query="SELECT * FROM tareas WHERE id=$id";
$resultado= mysqli_query($conexion, $query);
$fila=mysqli_fetch_array($resultado);
$nombre=$fila['nombre'];
$descripcion=$fila['descripcion'];
$_SESSION = [
    "nombre" => $nombre,
    "descripcion" => $descripcion
];
header("Location:views/actualizar");
