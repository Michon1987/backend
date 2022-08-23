<?php
/*En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor 
de la compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es de 
color blanco no se le hará descuento alguno, si es verde se le hará un 10% de descuento, si es 
amarilla un 25%, si es azul un 50% y si es anaranjada un 100%. Determinar la cantidad final que el 
cliente deberá pagar por su compra si se sabe que solo hay bolitas de los colores mencionados.
*/
$Precio = 100;
$total = $Precio * $Cantidad;
echo "Marque el color de su bolita" .   PHP_EOL;
$A = readline("1 Blanca, 2 Verde, 3 Amarilla, 4 Azul, 5 Naranja ");
$Cantidad = readline("Indique la cantidad de Bolitas que lleva ");
if ($A == 1) {
    $total = $Precio * $Cantidad;
    echo "Usted debe pagar: " .$total;
}


elseif ($A == 2) {
    $total = ($Precio * $Cantidad) - (($Precio*$Cantidad)* 0.10);
    echo "Usted tiene 10% de descuento y debe pagar " .$total;
}
   
elseif ($A == 3) {
    $total = ($Precio * $Cantidad) - (($Precio*$Cantidad)*0.25);
    echo "Tiene descuento del 25% y debe pagar: " . $total;
}
    

elseif ($A == 4) {
    $total = ($Precio * $Cantidad) - (($Precio*$Cantidad)*0.5);
    echo "Tiene descuento del 50% y debe pagar: " . $total;
}


elseif ($A == 5) {
    $total = ($Precio * $Cantidad) - (($Precio*$Cantidad)* 1);
    echo "Tiene descuento del 100% y debe pagar: " . $total;
}

else {
    "Elija bien la opcion";
}

?>
