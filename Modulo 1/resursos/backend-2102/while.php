<?php

$i = 1;
while ($i <= 10) {
    echo $i;
    echo '<br>';
    $i++;  
}

echo '<br><br>';

$i = 1;
$j = 15;
while ($i <= 10 && $j > 5) {

    echo $i;
    echo '<br>';
    $i++;  
}



$array1 = [
    'Juan',
    'Jose',
    'Pedro',
    'Mario'
];


$i = 0;
while($i < 10 && isset($array1[$i])){
    echo $array1[$i].' ';
    $i++;
}

echo '<br><br>';

//$i = 0;
while($i < 10){
    echo $i;
    $i++;
}

