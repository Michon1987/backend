<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilla de Gastos</title>
</head>
<body>
    <H1 align = "center">A poner la Money Chinwenwenchas!</H1>
    <h2 align = "center">Escribi lo que gastó cada uno y poné enviar</h2>
    <form align ="center" method="POST">
        Melisa Gastó:
        <br><input type="number" name="Melisa"><br>
        Alejandra Gastó:
        <br><input type="number" name="Ale"><br>
        Chino Gastó:
        <br><input type="number" name="Chino"><br>
        Martin Gastó:
        <br><input type="number" name="Martin"><br>
        Franco Gastó:
        <br><input type="number" name="Franco"><br>
        <br>
        <input type="submit">
        <br>
        </form>
        
        <?php
        $Melisa = $_POST["Melisa"] ?? 0 ;
        $Chino = $_POST["Chino"] ?? 0 ;
        $Ale = $_POST["Ale"]?? 0 ;
        $Martin = $_POST["Martin"]?? 0 ;
        $Franco = $_POST["Franco"]?? 0 ;
        $TotalDeGastos = null;
        $PonerMeli = null;
        $PonerChino = null;
        $PonerAle = null;
        $PonerMartin = null;
        $PonerFranco = null;
        $PonerCadaUno = null;
        
        $PonerMeli = $Melisa - ($Melisa + $Chino + $Ale + $Martin + $Franco) / 4;
        $PonerChino = $Chino - ($Melisa + $Chino + $Ale + $Martin + $Franco) / 4;
        $PonerAle = $Ale;
        $PonerMartin = $Martin - ($Melisa + $Chino + $Ale + $Martin + $Franco) / 4;
        $PonerFranco = $Franco -($Melisa + $Chino + $Ale + $Martin + $Franco) / 4;
        $PonerCadaUno = ($Melisa + $Chino + $Ale + $Martin + $Franco) / 4;
        $TotalDeGastos = $Melisa + $Chino + $Ale + $Martin + $Franco ;
        
        echo "El Total de los Gastos es: " . $TotalDeGastos . "<br>"; 
        
        echo "Cada uno tiene que poner: " . $PonerCadaUno . "<br>";
        
        echo "Melisa: " . $PonerMeli ."<br>";
        
        echo "Ale: " . $PonerAle . "  (Ale esta bonificada porque la juntada anterior llevo bebida y no la cobró)"."<br>";
        
        echo "Chino: ". $PonerChino ."<br>";
        
        echo "Martin: " . $PonerMartin . "<br>";
        
        echo "Franco: " . $PonerFranco ."<br>". "<br>". "<br>";
      
        echo "Si tu resultado da negativo significa que tenes que poner, si da positivo es lo que tenes que recuperar!"."<br>"."<br>"."<br>";
       
        echo "p/d: no se quejen que todos salieron bastante alchoolizados. Besis!";

     ?>
        
</body>
</html>
