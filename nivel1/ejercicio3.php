<?php
// Ejercicio 3:
$array3 = ["hola", "php", "html", "hospital", "hotel", "huskie"];

function todasContienen($palabras, $caracter) {
    foreach($palabras as $palabra) {
        if (strpos(strtolower($palabra), strtolower($caracter)) === false ) {
            return false;

        }
    }
    return true; 
}

echo todasContienen($array3, "h") ? "true" : "false";
echo " ". PHP_EOL;
echo todasContienen($array3, "l") ? "true" : "false";

?>