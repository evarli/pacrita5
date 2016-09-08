<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
</head>
<h1 align="center">Ejercicio 5</h1>
<body >
<a href="index.php">Inicio</a>
<?php
if ($gestor = opendir('fotos'))		
{
 echo "<table border=1>";
 echo "<tr>";
 $i=0;

 while (false !== ($archivo = readdir($gestor)))  
 {
 		if ($archivo!="." && $archivo!="..")
 		{

 			if ($i==4) 
 			{
				 $i=0;
 			  	echo "</tr>";
				 echo "<tr>";
 			}
 			$i++;
 			echo "<td>";
 			echo "<a href=fotos/$archivo><img src=fotos/$archivo width='200px'> 
			</a>";
		 	echo "</td>";
 		}
 }
 echo "</tr>";
 echo "</table>";
 closedir($gestor);//closedir — Cierra un gestor de directorio
}
?>

</body>
</html>