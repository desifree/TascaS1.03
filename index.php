<?php
//Ejercicio 1
/*$array1 = [600, 250, 345, 480, 509];

foreach($array1 as $n){ //muestra los números del array uno por uno
    var_dump($array1)"<br>";

}*/

// Ejercicio 2
$array2 = [100, 200, 300, 400, 500, 600];

echo "Tamaño inicial del array: ".count($array2)."<br>";

echo "Eliminamos el lugar 4 en el arraay: <br>";
unset($array2[4]); // Elimina un elemento del array: el '500'
var_dump($array2);

$array2 = array_values($array2);

echo "Tamaño final del Array: ".count($array2)."<br>";
echo "Contenido del Array: <br>";

foreach ($array2 as $Valor) {
    echo $Valor."<br>";

}


?>