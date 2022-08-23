<?php


//https://www.php.net/manual/es/control-structures.for.php

for( $i = 0; $i < 10; $i++ ){
    echo $i.'<br>';
}

echo '<br><br>';

for( $i = 0; $i <= 20; $i = $i + 2 ){
    echo $i.'<br>';
}


echo '<br><br>';


$letras = array('a','b','c','d','e','f');
for($i = 0; $i < 10; $i++){
    if(isset($letras[$i])){
        echo $letras[$i].'-';
    }
}

echo '<br><br>';

$maximo = count($letras);
echo $maximo.'<br>';
for($i = 0; $i < $maximo; $i++){
    echo $letras[$i].'-';
}


echo '<br><br>';

$maximo = count($letras);
for($i = 0; $i < $maximo; $i++){
    if(($i % 2) == 0){
        echo '<div style="background:#EEE">'.$letras[$i].'</div>';
    }else{
        echo '<div style="background:#F00">'.$letras[$i].'</div>';
    }
}


echo '<br><br>';


// https://www.php.net/manual/es/function.array-keys
$elementos = [
    'uno' => 'Juan',
    'dos' => 'Ariel',
    'hola' => 'Stephy',
    'gs' => 'a+'
];

$keys = array_keys($elementos);
$maximo = count($keys);


echo '<pre>';
print_r($keys);
echo '</pre>';


for($i = 0; $i < $maximo; $i++){
    echo $keys[$i];
    echo ' - ';
    echo $elementos[ $keys[$i] ];
    echo '<br>';
}

