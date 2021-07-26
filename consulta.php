<?php
include('../funciones/setup.php');
$con=mysqli_connect("localhost","root","Geotren","geotren");
$sql="SELECT
 tabla_lugares.nombre AS nombre_lugar, trabajo_transporte.*, trabajador.nombre AS nombre_trabajador, tabla_lugares.id_sector AS nombre_sector
FROM trabajo_transporte
INNER JOIN
  tabla_lugares ON tabla_lugares.id = trabajo_transporte.id
 INNER JOIN
  trabajador ON trabajador.id_trabajador = trabajo_transporte.id_trabajador
   WHERE trabajador.estado = 'Activo'";
$result=mysqli_query($con,$sql);
$arr = array();
while ($datos=mysqli_fetch_array($result)){
    $arr[]= $datos;
}
echo json_encode($arr);
?>