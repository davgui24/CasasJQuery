<?php
include("connection.php");

$codigo=$_GET["codigo"];

mysqli_set_charset($connection,"utf8");


$eliminaCasa = "DELETE FROM  casa WHERE codigo='$codigo'";



$resultadoCasa = mysqli_query($connection, $eliminaCasa);






if($resultadoCasa){
	?>
	<script>
		alert('La casa se eliminó correctamente')
	</script>
	<?php
	header('Location: ../');
}else{
	echo 'No mse pudo eliminar';
}
