<?php
// Ejercicio 2
$array2 = [100, 200, 300, 400, 500, 600];

echo "Tamaño inicial del array: ".count($array2) . PHP_EOL;

echo "Eliminamos el lugar 4 en el arraay:" . PHP_EOL;
unset($array2[4]); // Elimina un elemento del array: el '500'
var_dump($array2);

$array2 = array_values($array2);

echo "Tamaño final del Array: ".count($array2) . PHP_EOL;
echo "Contenido del Array: " . PHP_EOL;

foreach ($array2 as $Valor) {
    echo $Valor . PHP_EOL;

}
?>
