<?php
$A = 33;
$B = !(( $A > 10 ) && ( $A < 20 ) );
$C = !(( $A> 10 ) || !( $A < 20 ));
echo var_dump($B);
echo var_dump($C);