<?php
$hostname='localhost';
$database='id21488114_dbclinica';
$username='id21488114_dbclinica';
$password='3223bocaR-';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>