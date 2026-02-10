<?php
$brideList = ["Tavera", "Bolla", "Meda", "Elba", "Judith", "Angel", "Alejandra", "Francia", "Andres", "Victor"];
$groomList = ["Samuel", "Bolla" ,"Dolores", "Daniel", "Angel", "Victor", "Andres", "Eduardo", "Francia"];

$common = array_intersect($brideList, $groomList); // invitados en común

$mix = array_unique(array_merge($brideList, $groomList)); // mezcla ambos

$onlyBrideList = array_diff($brideList, $groomList); // Solo lista novia

$onlyGroomList = array_diff($groomList, $brideList); // solo lista novio

echo "Mutual Guests: " . PHP_EOL;
foreach ($common as $name) {
    echo $name . PHP_EOL;
}

echo PHP_EOL . "Mix without repetitions: " . PHP_EOL;
foreach ($mix as $name) {
    echo "- $name" . PHP_EOL;
}

echo PHP_EOL . "Bride List: " . PHP_EOL;
foreach ($onlyBrideList as $name) {
    echo "- $name" . PHP_EOL;
}

echo PHP_EOL . "Groom List: " . PHP_EOL;
foreach ($onlyGroomList as $name) {
    echo "- $name" . PHP_EOL;
}


?>