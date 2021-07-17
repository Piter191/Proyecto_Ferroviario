<?php
include('../funciones/setup.php');

$sql="SELECT * FROM trabajo_transporte";
$result=mysqli_query(conectar(),$sql);
$arr = array();
while ($datos=mysqli_fetch_array($result)){
    $arr[]= $datos;
}
echo json_encode($arr);
?>