<?php
$A = 10;
$B = 20;
$C = !(!($A<>10) || (20>$B) and ($A=10));
echo var_dump($C);