<?php
require("conexion.php");
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$sql="SELECT * FROM `datos` WHERE `usuario` LIKE '$usuario' AND `password` LIKE '$clave'";
$resultado=mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)!=0)
{
	while($row=mysqli_fetch_assoc($resultado))
	{

		echo $row['Id'];
		echo $row['nombre'];

	}
}
?>