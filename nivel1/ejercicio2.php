<?php
// Ejercicio 2
$numbers_list = [100, 200, 300, 400, 500, 600];

echo "Array size: ".count($numbers_list) . PHP_EOL;

echo "We removed position 4 from the array: " . PHP_EOL;
unset($numbers_list[4]); // Elimina un elemento del array: el '500'
var_dump($numbers_list);

$numbers_list = array_values($numbers_list);

echo "Final array size: ".count($numbers_list) . PHP_EOL;
echo "Array Content: " . PHP_EOL;

foreach ($numbers_list as $Valor) {
    echo $Valor . PHP_EOL;

}
?>
