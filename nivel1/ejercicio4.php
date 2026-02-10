<?php
//ejercicio 4
$datosPersonales = [
    "nombre" => "Carol Desireé",
    "edad" => 33,
    "email" => "desireecarol@gmail.com",
    "comida_favorita"=> "Pozole"];

foreach( $datosPersonales as $clave => $valor ) {
echo $clave.": " . $valor . PHP_EOL;

}
?>