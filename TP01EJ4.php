<?php
/*4.- Si a = 20, b = a, c = 15, d = 10. Determinar si la siguiente operación es VERDADERA o FALSA
(( a = b ) O ( b > c ) ) O ( c < d )

*/

$A = 20;
$B = $A;
$C = 15;
$D = 10;
$E = (( $A = $B ) or ( $B > $C ) ) or ( $C < $D );
echo var_dump($E);


