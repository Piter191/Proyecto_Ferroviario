<?php
include('../funciones/setup.php');
$con=mysqli_connect("localhost","root","Geotren","geotren");
$sql="SELECT * FROM trabajo_transporte";
$result=mysqli_query($con,$sql);
$arr = array();
while ($datos=mysqli_fetch_array($result)){
    $arr[]= $datos;
}
echo json_encode($arr);
?>