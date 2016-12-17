<link href="css/main.css" rel="stylesheet" type="text/css"/>
<link href="css/tablas.css" rel="stylesheet" type="text/css" />
<script>
function editar(id){
	window.location="editaralumno.php?Id="+id;
}
function eliminar(id){
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location="eliminaralumno.php?Id="+id;
	}else{
	
	}
	
}
</script>
<small><font color="red">* Al eliminar un Alumno, igual se eliminan los cursos la que le pertenece</font></small>
<table width="100%">
		<tr>
		<td class="down1">
		<strong><center> LISTA DE ALUMNOS </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>CEDULA</th>
   <th>NOMBRES Y APELLIDOS</th>
   
   <th>CELULAR</th>
   <th>CURSO</th>
   <th>PARALELO</th>
   <th>CORREO</th>
   <th>TELEFONO</th>
   <th>FECHA NACIMIENTO</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('conectar.php');
 $contador = 0;
 $sql = "SELECT * FROM alumno order by id";
 $rs  = mysql_query($sql,$link);
 if(mysql_num_rows($rs) !=0 ){
	while($row=mysql_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		
		
		
		
	
		
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/actions-edit.png" onclick="editar('.$row['id'].')"/>  ';
		echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['id'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
        echo '<td>'.$row['cedula'].'</td>';
        echo '<td>'.$row['nombre'].'</td>';
		//echo '<td>'.$row['apellido'].'</td>';
        echo '<td>'.$row['celular'].'</td>';
		echo '<td>'.$row['curso'].'</td>';
		echo '<td>'.$row['paralelo'].'</td>';
		
		
		echo '<td>'.$row['mail'].'</td>';
		echo '<td>'.$row['telefono'].'</td>';
		echo '<td>'.$row['fechaNac'].'</td>';
		
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>