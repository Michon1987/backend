<?php

// --------------------------------
// -- Declaración de switch - Según
// --------------------------------

/*

Similar a una serie de sentencias if.

switch (expression) {
case 0:
//code
break;
case 1:
//code
break;
case 2:
//code
break;
}

La expresión sólo se evalúa una vez y el resultado se compara con cada una de las sentencias case.
Si coincide, entonces se ejecuta el código hasta el break;

- la sentencia case puede estar vacía
- si no se utiliza la sentencia break, entonces se ejecuta el siguiente bloque de código.

 */

$nota = readline('Ingrese la nota: ');

switch ($nota) {
    case 0:
    case 1:
    case 2:
    case 3:
        echo "Su examen esta reprobado";
        break;
    case 4:
    case 5:
    case 6:
        echo "Su examen esta regular";
        break;
    case 7:
    case 8:
    case 9:
        echo "Su examen esta Promocionado";
        break;
    case 10:
        echo "su examen esta excelente";
        break;
    default:
        echo "su examen no tiene una califiación asignada";
        break;
}

