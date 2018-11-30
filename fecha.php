<?php
include("conexion.php"); 
function sacardatos($f)
{
      $con2=conectar();
      $consu="SELECT ren.fecha, ren.dias,ren.id_renta, 
      			 	 hab.numero,hab.tipo,hab.precio_dia, 
      			 	 cli.id,cli.nombre,cli.apellido,cli.nacionalidad,cli.sexo, 
      			 	 fac.id_factura,fac.fecha,fac.precio_total 
     FROM renta ren INNER JOIN habitacion hab ON ren.id_habitacion=hab.numero 
     INNER JOIN cliente cli ON ren.id_cliente= cli.id 
     INNER JOIN factura fac ON ren.id_factura=fac.id_factura 
     WHERE ren.fecha='{$f}'
       ";
      $resultado=mysqli_query($con2,$consu );
      return $resultado;

 
}
function ganancia_del_dia($f)
{


      $con2=conectar();
      $consu="SELECT SUM(precio_total) as total FROM factura WHERE fecha='{$f}'";
      $resultado=mysqli_query($con2,$consu );
      return $resultado; 
}


    
  ?>