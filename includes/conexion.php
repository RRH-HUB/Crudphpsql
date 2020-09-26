<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="crudphpmysql";
$conexion= mysqli_connect($host, $username, $passwd, $dbname);
//comprobacion de la conexion burda 
/*
if(isset($conexion)){
    echo"conexion realizada";
}else{
    echo"conexion fallida";
}
 * 
 */
