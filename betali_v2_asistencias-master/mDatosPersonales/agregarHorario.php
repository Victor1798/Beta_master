<?php
// Conexion mysqli
include ("../conexion/conexionli.php");

//Recibo valores con el metodo POST
$LunEntrada     = $_POST['LunEntrada'];
$LunSalida    = $_POST['LunSalida'];
$MarEntrada = $_POST['MarEntrada'];
$MarSalida = $_POST['MarSalida'];
$MierEntrada      = $_POST['MierEntrada'];
$MierSalida    = $_POST['MierSalida'];
$JueEntrada      = $_POST['JueEntrada'];
$JueSalida = $_POST['JueSalida'];
$VieEntrada      = $_POST['VieEntrada'];
$VieSalida = $_POST['VieSalida'];
$SabEntrada      = $_POST['SabEntrada'];
$SabSalida = $_POST['SabSalida'];
$DomEntrada      = $_POST['DomEntrada'];
$DomSalida      = $_POST['DomSalida'];
$turnoT    = $_POST['turnoT'];
$idUsuario    = $_POST['idUsuario'];

$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

//Inserto registro en tabla pacientes 
$cadena = "INSERT INTO horarios
				(id_datos_persona,
				turno,
				l_entrada, 
				l_salida, 
				m_entrada, 
				m_salida, 
				mi_entrada, 
				mi_salida, 
				j_entrada, 
				j_salida,
                v_entrada,
                v_salida,
                s_entrada,
                s_salida, 
                d_entrada,
                d_salida,
				fecha_registro, 
				hora_registro)
			VALUES
				('$idUsuario',
				'$turnoT',
				'$LunEntrada', 
				'$LunSalida', 
				'$MarEntrada', 
				'$MarSalida', 
				'$MierEntrada', 
				'$MierSalida',
				'$JueEntrada',
				'$JueSalida',
                '$VieEntrada',
				'$VieSalida',
                '$SabEntrada',
				'$SabSalida',
                '$DomEntrada',
				'$DomSalida',
				'$fecha', 
				'$hora')";
$insertar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?> 