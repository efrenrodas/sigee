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
		<strong><center> LISTA DE ALUMNOS DEL CURSO </center></strong>
		</td>
		</tr>
                
		</table>
                
<table id="table" cellspacing="0" width="100%">
 <thead>
  <tr class="asc" id="head">
   <th></th>
   <th>No.</th>
   <th>NOMBRE</th>
   <th>CURSO</th>
   <th>DESCRIPRCION</th>
   <th>NIVEL</th>
  </tr>
 </thead>
 <tbody id="tbody">
 <?php 
 include('conectar.php');
 $id = $_GET['Id'];
 $contador = 0;
 //$sql = "SELECT * FROM `estudiante` WHERE curso_idcurso=".$id;
 $sql = "SELECT agc, aic, lec, tar, pbc, nombreEstudiante, nombrecurso, nombreMaterias
FROM  `notas1b` ,  `curso` ,  `estudiante` ,  `materias` 
WHERE estudiante_idestudiante = idestudiante
AND materias_idmaterias = idmaterias
AND materias_curso_idcurso = idcurso";
 //$sql = "SELECT * FROM `estudiante`,`curso` WHERE curso_idcurso =$id and idcurso = curso_idcurso";
 $rs  = mysql_query($sql,$link);
 if(mysql_num_rows($rs) !=0 ){
	while($row=mysql_fetch_assoc($rs)){
		$class="odd";
		$contador = $contador + 1;	 
		if($contador%2){$class="even";}
		
		
		
		
	
		
		echo '<tr class="'.$class.'">';
		echo '<td>';
	    echo '<img src="imagenes/editar.gif" onclick="editar('.$row['idalumno'].')"/>  ';
		//echo '<img src="imagenes/actions-delete.png" onclick="eliminar('.$row['idalumno'].')"/>';
		echo '</td>';
		echo '<td>'.$contador.'</td>';
		echo '<td>'.$row['nombreEstudiante'].'</td>';
		echo '<td>'.$row['nombrecurso'].'</td>';
		echo '<td>'.$row['descripcion'].'</td>';
		echo '<td>'.$row['nivel'].'</td>';
		
		echo '</tr>';
	}
 }else{
	echo '<tr><td colspan=7><center>No Existe Registros</center></td></tr>';
 }
 ?>
 
 </tbody>
</table>