<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="crudphpmysql";
$conexion= mysqli_connect($host, $username, $passwd, $dbname);
if(isset($conexion)){
    echo"conexion realizada";
}else{
    echo"conexion fallida";
}