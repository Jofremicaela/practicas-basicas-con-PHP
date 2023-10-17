<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambito de variables</title>
</head>
<body>


<?php

$m=10;

function mostrar ()
{
$m=20;
echo ("Dentro de la funcion el valor de m es : $m " );
}

mostrar();

echo "<Br><Br>";
echo("Fuera de la funcion el valor de m es: $m");


    ?>
    
</body>
</html>