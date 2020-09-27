<?php

include("includes/conexion.php");
$id = $_GET['id'];


$query = "SELECT * FROM tareas WHERE id=$id";
$resultado = mysqli_query($conexion, $query);
$fila = mysqli_fetch_array($resultado);
$nombre = $fila['nombre'];
$descripcion = $fila['descripcion'];
$id=$fila['id'];
$_SESSION = [
    "nombre" => $nombre,
    "descripcion" => $descripcion,
    "id" => $id
];
header("Location:views/actualizar");
