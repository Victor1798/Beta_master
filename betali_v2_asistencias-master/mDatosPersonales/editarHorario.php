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
$cadena = "UPDATE horarios
			SET
            turno          = '$turnoT',
            l_entrada         = '$LunEntrada',
            l_salida     = '$LunSalida', 
            m_entrada     = '$MarEntrada', 
            m_salida           = '$MarSalida', 
            mi_entrada          = '$MierEntrada', 
            mi_salida      = '$MierSalida', 
            j_entrada           = '$JueEntrada', 
            j_salida         = '$JueSalida', 
            v_entrada      = '$VieEntrada', 
            v_salida         = '$VieSalida',
            s_entrada      = '$SabEntrada', 
            s_salida         = '$SabSalida',
            d_entrada      = '$DomEntrada', 
            d_salida         = '$DomSalida', 
			fecha_registro = '$fecha', 
			hora_registro  = '$hora'
			WHERE 
            id_datos_persona= $idUsuario";
$actualizar = mysqli_query($conexionLi, $cadena);

//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexion
mysqli_close($conexionLi);
?> 
