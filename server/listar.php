<?php
include("connection.php");



mysqli_set_charset($connection,"utf8");



$querycasa = "select * from casa";

    $resultadoQueryCasa = mysqli_query($connection, $querycasa);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryCasa)){
    $array[] = $fila;
    }

   echo json_encode($array);