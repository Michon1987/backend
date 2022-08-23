<?php
/* - Siendo el valor de las variables: a = 10 b = 12 c = 13 d = 10 Encontrar el valor de verdad de cada una de las 
siguientes expresiones
a) (( a > b ) O ( a < c ) ) Y ( ( a = c) O ( a >= b ) )
b) (( a >= b ) O ( a < d ) ) Y ( ( a >= d ) Y (c > d ) )
c) NO (a = c ) Y ( c > b 
*/
$A = 10;
$B = 12;
$C = 13;
$D = 10;
$E = (( $A > $B ) or ( $A < $C ) ) && ( ( $A = $C) or ( $A >= $B ) );
$F = (( $A >= $B ) or ( $A < $D ) ) && ( ( $A >= $D ) and ($C > $D ) );
$G =  !($A = $C ) and ( $C > $B );
echo var_dump($E);
echo "<br>";
echo var_dump($F);
echo "<br>";
echo var_dump($G);