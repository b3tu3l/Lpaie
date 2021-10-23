<?php

#$conexion = new mysqli("ubicacion", "usuario", "password","NombreBaseDatos");
$conexion = new mysqli("localhost", "root", "root","tutorial");

$chipid = $_POST ['chipid'];
$temperatura = $_POST ['temperatura'];
#$query="INSERT INTO `NombreBaseDatos`.`NombreTabla` (`id`, `chipId`, `fecha`, `temperatura`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$temperatura');";
$query="INSERT INTO `tutorial`.`tabla` (`id`, `chipId`, `fecha`, `temperatura`) VALUES (NULL, '$chipid', CURRENT_TIMESTAMP, '$temperatura');";
$resultado= $conexion->query($query);


if($resultado){

              echo "Registro exitoso";
              }
else{
             echo "Registro no exitoso";
    }

?>