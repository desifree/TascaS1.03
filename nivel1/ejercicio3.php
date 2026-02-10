<?php
// Ejercicio 3:
$words_list = ["hello", "php", "html", "hospital", "hotel", "huskie"];

function todasContienen($words, $caracter) {
    foreach($words as $word) {
        if (strpos(strtolower($word), strtolower($caracter)) === false ) {
            return false;

        }
    }
    return true; 
}

echo todasContienen($words_list, "h") ? "true" : "false";
echo " ". PHP_EOL;
echo todasContienen($words_list, "l") ? "true" : "false";

?>