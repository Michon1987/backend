<?php
$A = readline("Ingrese el Dia ");
$B = readline("ingrese el Mes ");
$C = readline("ingrese el Año ");

if ($A < 1 or $A > 31) {
    echo "Ingresaste Mal el Dia, tiene que ser un valor entre 1 y 31 " . PHP_EOL;
}
else {
    echo "Su Dia fue ingresado con éxito " . PHP_EOL;
}

if ($B < 1 or $B> 12) {
    echo "Ingresaste Mal el Mes, tiene que ser un numero entre 1 y 12 " . PHP_EOL;
}
else {
    echo "Su Mes fue ingresado con éxito " . PHP_EOL;
}

if ($C < 2000) {
    echo "El año ingresado debe ser mayor o igual al año 2000 " . PHP_EOL;
}
else {
    echo "Su Año fue ingresado con éxito";
}