<?php 
include("includes/conexion.php"); 

$sql = "SELECT * FROM tareas";
$contador = mysqli_query($conexion, $sql);
var_dump($contador);
var_dump($sql);