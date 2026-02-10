<?php
//ejercicio 4
$personalData = [
    "name" => "Carol Desireé",
    "age" => 33,
    "email" => "desireecarol@gmail.com",
    "favorite_food"=> "Pozole"];

foreach( $personalData as $key => $value ) {
echo $key.": " . $value . PHP_EOL;

}
?>