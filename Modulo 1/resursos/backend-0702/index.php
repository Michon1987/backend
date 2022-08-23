<?php

// mostramos los errores en el código
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//-- https://www.php.net/manual/es/language.operators.comparison.php


$variable1 = 5;
$variables2 = 5;
$variables3 = 8;

if( $variable1 == $variables2 ){
    echo 'Son iguales <br>';
}



//-- https://www.php.net/manual/es/language.operators.logical.php

if( $variable1 == $variables2 && $variable1 < $variables3 ){
    echo $variable1.' == '.$variables2.' && '.$variable1.' < '.$variables3.' ';
    echo 'La comparación es verdadera o true <br>';
}


if( $variable1 == $variables2 && $variable1 > $variables3 ){
    echo 'La comparación es verdadera o true <br>';
}else{
    echo $variable1.' == '.$variables2.' && '.$variable1.' > '.$variables3.' ';
    echo 'La condición es falsa <br>';
}


if($variable1 != $variables2 || $variable1 < $variables3){
    echo $variable1.' != '.$variables2.' || '.$variable1.' < '.$variables3.' ';
    echo 'Condición es es verdadera <br>';
}else{
    echo 'la condición es falsa';
}


//---------------------------------------------------------------------------------

//echo $var1;

//$var1  = 25;

if( isset($var1) && $var1 >= 25 ){
    echo 'La variable existe y es >= 25 <br><br>';

}else{
    //echo 'No existe';
}


//---------------------------------------------------------------------------------
// https://www.php.net/manual/es/function.strpos.php

$pajar = 'Un paraguas texto cualquiera para buscar algo';
$aguja = 'Un';
echo strpos($pajar, $aguja);

if( strpos($pajar, $aguja) !== false ){
    echo ' cadena encotrada';
}else{
    echo ' No existe la palabra en la cadena';
}


//--- las dos formas son válidas pero la segunda es "mas correcta"
if(4 > 5){
    echo 'hago algo por primer condición';
}else{

    if(4 == 4){
        echo 'eso es verdadero, 4 = 4 <br>';
    }
}


if(4 > 5){

}else if(4 == 4){

}else{

}


//----------------------------------------------------------------------------------------------

$variable = 3100;
switch ($variable) {
    case 3100:
        echo "Código postal Paraná";

        break;
    case 3150:
        echo "Otro número";

        break;
    case 3446:
        echo "Código área Gualguaychú";

        break;
}


