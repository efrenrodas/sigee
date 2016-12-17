<?php
include('conecta.php');
$sql="select * from cursos";
$result=mysql_query($sql, $link);
echo "<select name=cursos>";
        while($row=mysql_fetch_assoc($result))
        {
        echo '<option value= ''>'.$row['nombrecurso'];
        }
echo "</select>";
?>
<html>
</html>
