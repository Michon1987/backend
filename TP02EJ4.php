<?php
echo "Bienvenidos a Triangulometria jaja". PHP_EOL;
$A = readline("Ingrese la medida de un lado del Triengulo ");
$B = readline("Ingrese la medida de otro lado del Triangulo ");
$C = readline("Ingrese la medida del lado que queda ");

if ($A == $B and $A == $C) {
    echo "El Triangulo es Equilatero";
}
else if ($A == $B and $A != $C) {
    echo "El Triangulo es Isósceles";
}
else if ($A != $B and $A != $C and $B != $C) {
    echo "El Triangulo es Escaleno";
}
else {
    echo "Ingresaste algo mal salame jaja";
}