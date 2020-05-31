<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

//Recibo valores con el metodo POST
$id    	 = $_POST['id'];
$pass    = $_POST['pass'];


//Inserto registro en tabla pacientes 
$cadena = "UPDATE usuarios
			SET
				contra = '$pass'
			WHERE 
				id_usuario= $id";
$actualizar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?>