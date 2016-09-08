<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	<meta name="description" content="Mi sitio web" />
	
	<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<h1 align="center">Ejercicio 1</h1>
<body  	>
    
<a href="index.php">Inicio</a>
<?php

echo "<table border=2>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{

 echo "<tr >";
 for ($n2=1; $n2<=10; $n2++)
 {
 echo "<td>", $n, "</td>";
 $n=$n+1;
 }
 echo "</tr>";
}
echo "</table>";

?>
     


</body>
</html>