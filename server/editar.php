<?php
include("connection.php");

$codigo=$_POST["codigo2"];
$direccion=$_POST["direccion2"];
$propietario=$_POST["propietario2"];
$valor=$_POST["valor2"];

mysqli_set_charset($connection,"utf8");


$actualizaCasa = "UPDATE  casa SET direccion='$direccion', propietario='$propietario', valor='$valor' WHERE codigo='$codigo'";

    $querycasa = "select * from casa";

    $resultadoCasa = mysqli_query($connection, $actualizaCasa);

    $resultadoQueryCasa = mysqli_query($connection, $querycasa);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryCasa)){
    $array[] = $fila;
    }

   echo json_encode($array);