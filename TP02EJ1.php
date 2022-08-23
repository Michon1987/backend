<?php
$A= readline("Ingrese un Numero ");
if ($A>0 and $A%2==0) {
    echo "El Numero ingresado es Positivo y Par";
}

elseif ($A<0 and $A%2==0) {
    echo "El Numero ingresado es Negativo y Par";
}

elseif ($A>0 and $A%2!=0) {
    echo "El Numero ingresado es Positivo e Impar";
}

else if ($A<0 and $A%2!=0) {
    echo "El Numero ingresado es Negativo e Impar";
}

else if($A<>0) {
    echo "El Numero que ingresaste es el Cero";
}

else echo "No ingresaste ningun Numero";