<?php 
	include('conectar.php');
	$id         = $_POST['id'];
	$nombre	 	= $_POST['nombre'];
        $apellidos =$_POST['apellidos'];
$nombresT=$nombre." ".$apellidos;
        $fechaNac = $_POST['fechaN'];
		$curso 	= $_POST['curso'];
		$paralelo 	= $_POST['paralelo'];
		$cedula 	= $_POST['cedula'];
		$celular 	= $_POST['celular'];
		$email     =$_POST['email'];
		$Hpadre     = $_POST['Hpadre'];
		$Hmadre     =$_POST['Hmadre'];
		$calleP     = $_POST['calleP'];
		$calleS     = $_POST['calleS'];
		$ciudad     = $_POST['ciudad'];
		$provincia     = $_POST['provincia'];
		$postal    = $_POST['postal'];
		$parroquia    = $_POST['parroquia'];
		$emergencia    = $_POST['emergencia'];
		$telefono    = $_POST['telefono'];
	
	

echo $sql="UPDATE  `sanluisb_sigest`.`alumno` SET  
`curso` =  '$curso',
`paralelo` =  '$paralelo',
`cedula` =  '$cedula',
`celular` =  '$celular',
`mail` =  '$email',
`nombre` =  '$nombresT',
`apellido` =  '$apellidos',
`fechaNac` =  '$fechaNac',
`Hpadre` =  '$Hpadre',
`Hmadre` =  '$Hmadre',
`calleP` =  '$calleP',
`calleS` =  '$calleS',
`cuidad` =  '$ciudad',
`provincia` =  '$provincia',
`postal` =  '$postal',
`parroquia` =  '$parroquia',
`emergencia` =  '$emergencia',
`telefono` =  '$telefono' WHERE  `alumno`.`id` ='$id'";
	mysql_query($sql,$link);
	echo '<center><img src="imagenes/correcto.gif"/>Informacion Actualizada Correctamente.</center>';

?>