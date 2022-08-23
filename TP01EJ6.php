<?php
/*6.- Encontrar el valor de verdad de la siguiente expresión dados los valores 
M = 8, N = 9, R = 5, S = 5, T = 4, V = 77.
NO ((M > N Y R > S ) O ( NO ( T < V Y S > M ) ) )
*/ 
$M = 8;
$N = 9;
$R = 5;
$S = 5;
$T = 4;
$V = 77;
$A = !(($M > $N && $R > $S ) or (  !( $T < $V && $S > $M ) ) );
echo var_dump($A);