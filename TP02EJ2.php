<?php
$Horario = readline("Si cursa Diurno Marque 1, si cursa vespertino marque 2 ");"<br>";
$Nota = readline("Ingrese su Promedio ");"<br>";
if ($Horario == 1 and $Nota >= 3.5) {
    echo "usted cursa diurno y tiene que rendir Final";
}

elseif ($Horario == 1 and $Nota < 3.5) {
    echo "Usted cursa diurno y esta reprobado y tiene que recursar";
}

elseif ($Horario == 2 and $Nota >= 6) {
    echo "Usted cursa vespertino y aprobo y no rinde final";
}

elseif ($Horario == 2 and $Nota >= 3.5) {
    echo "Usted cursa vespertino y aprobo pero debe rendir final";
}

elseif ($Horario == 2 and $Nota < 3.5) {
    echo "Usted cursa vespertino y esta reprobado y tiene que recursar";"<br>";
}

else echo "usted ingreso su nota y horario mal";