<?php
$ListaCreciente = array( $A= 2, $B=1, $C=3 );
asort($ListaCreciente);
foreach ($ListaCreciente as $key => $val) {
    echo "$key = $val\n";
}
?>