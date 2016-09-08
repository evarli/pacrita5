<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />

 <?php
  
 
  $filas = 9;
  $columnas = 9;
  $texto = 0;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body >      
 <h1 align="center">Ejercicio 4</h1>
<a href="index.php">Inicio</a>
<table border="1">
 <?php
 for($t=0;$t<$filas;$t++){
          echo "<tr>";          
      for($y=0;$y<$columnas;$y++){
         if($grey){
            
              echo "<td style=padding:3px;
                 bgcolor=green;>".$p."</td>";            
              $grey=false;
				$p=pow($texto,2);
              $texto++;
         }
         else{
            
              echo "<td style=padding:3px;>".$p."</td>";
              
             $p=pow($texto,2);
              $grey=true;
              $texto++;
          }
       }
    
       echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>