<?php

//https://www.php.net/manual/es/language.types.array.php
//https://www.php.net/manual/es/function.array

$array1 = array();
$array1 = [];

$array1 = [55, '3', 5, 'texto'];

//-- formas de ver los datos en pantalla, solo para desarrollo
echo '<pre>';
var_dump($array1);
print_r($array1);
echo '</pre>';

echo $array1[3].'<br>';
echo $array1[0];

//-- error de no existencia del índice
//echo $array1[30];


//------------------------------------------------------------------------------------
//-- array inicializado, con índices sin orden
$array2 = [
    30 => 'valor en posición 30',
    55 => 888,
    2 => 'otro valor'
];
echo '<pre>';
print_r($array2);
echo '</pre>';
echo $array2[30];


//------------------------------------------------------------------------------------
//-- array con índices en formato texto
$platero = [
    'ciudad' => 'BsAs',
    'edad' => '25 años',
    'id' => 485
];
echo '<pre>';
print_r($platero);
echo '</pre>';

echo $platero['ciudad'].' '.$platero['edad'];


//------------------------------------------------------------------------------------

$alumnos = [
    0 => 'alumno nulo',

    1 => array(
        'nombre' => 'Juan',
        'edad' => 20,
        'ciudad' => 'Córdoba'
    ),

    2 => [
        'nombre' => 'Ariel',
        'edad' => 30,
        'ciudad' => ['Salta', 'Córdoba']
    ],

    999 => [
        'nombre' => 'Yo',
        'ciudad' => 'Paraná',
        'edad' => 40
    ]
];

echo '<pre>';
print_r($alumnos);
echo '</pre>';

//------------------------------------------------------------------------------------

//-- key
//-- value

foreach($array1 as $v){
    echo ' '.$v.'<br>';
}
echo '---------------------------------------------------------------<br>';
foreach($array1 as $k => $v){
    echo ' '.$k.' -> '.$v.'<br>';
}
echo '---------------------------------------------------------------<br>';
foreach($array2 as $k => $v){
    echo ' '.$k.' -> '.$v.'<br>';
}
echo '---------------------------------------------------------------<br>';
foreach($platero as $roberto => $luis){
    echo ' '.$roberto.' -> '.$luis.'<br>';
}


//https://www.php.net/manual/es/function.is-array.php
echo '---------------------------------------------------------------<br>';

foreach($alumnos as $key1 => $valores1){
    if(is_array($valores1)){
        //echo 'es un array ';
        foreach($valores1 as $key2 => $valores2){
            if(is_array($valores2)){
                print_r($valores2);
            }else{
                echo $key2.' / '.$valores2.'<br>';
            }
        }
    }else{
        //echo 'no es un array ';
        echo $valores1.'<br>';
    }
}

echo '<br><br>';
echo '---------------------------------------------------------------<br><br>';

// eliminar un dato
unset($alumnos[999]['nombre']);
//unset($alumnos[2]['ciudad'][1]);

foreach($alumnos as $key1 => $valores1){
    if(is_array($valores1)){
        if(isset($valores1['edad']) && $valores1['edad'] >= 25){
            echo '<pre>';
            print_r($valores1);
            echo '</pre>';
        }
    }
}


// alteramos la edad
$alumnos[2]['edad']++;
$alumnos[2]['edad'] = $alumnos[2]['edad'] + 25;
$alumnos[2]['provincia'] = 'Salta';

echo '<pre>';
print_r($alumnos[2]);
echo '</pre>';

echo count($alumnos);