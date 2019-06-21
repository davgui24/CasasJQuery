<?php
include("connection.php");

$codigo=$_POST["codigo"];
$direccion=$_POST["direccion"];
$propietario=$_POST["propietario"];
$valor=$_POST["valor"];

echo $propietario;

mysqli_set_charset($connection,"utf8");


$ingresaCasa = "INSERT INTO casa (codigo, direccion, propietario, valor) VALUES ('$codigo', '$direccion', '$propietario', '$valor')";

$querycasa = "select * from casa";


    $resultadoCasa = mysqli_query($connection, $ingresaCasa);
    $resultadoQueryCasa = mysqli_query($connection, $querycasa);


    $array = array();
    while($fila = mysqli_fetch_array($resultadoQueryCasa)){
    $array[] = $fila;
    }

   echo json_encode($array);


// if ($resultadoCasa) {
//   echo json_encode($array);
// } else {
//   echo "Error: " . $resultadoCasa . " --> " . $connection->error;
// }