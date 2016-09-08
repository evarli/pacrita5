<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	
	
	<!--<link rel="stylesheet" type="text/css" href="estilos.css" />-->

</head>

<body >
<a href="index.php">Inicio</a>
<br>

<?php 
$rows = array(
array(  'nombre' => 'Gillermo', 'apellidos' => 'Lima Perez', 'telefono' => '28456987'),
array('nombre' => 'juan', 'apellidos' => 'Lendres Gustavo', 'telefono' => '284563219'),
array('nombre' => 'Dina', 'apellidos' => 'Reina Quema', 'telefono' => '28463210'),
array('nombre' => 'Rene', 'apellidos' => 'Gironda Jura', 'telefono' => '28452103')
);
foreach($rows as $valor) {//RECORRE EL VECTOR $rows Y LO ASIGNA A LA VARIABLE $valor
echo 'NOMBRE: ' . $valor['nombre'] . '<br />'; //MUESTRA EL VALOR DE LA VARIABLE $VALOR
echo 'APELLIDOS: ' . $valor['apellidos'] . '<br />';
}
?>




	<!--SEGUNDA FORMA-->
<?php
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
foreach($estacion as $valor) {   //RECORRE EL VECTOR $estacion Y LO ASIGNA A LA VARIABLE $valor
echo 'ESTACION: '. $valor.'<br/>';  //MUESTRA EL VALOR DE LA VARIABLE $VALOR
}
?>
</body>
</html>