<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1-clase3</title>
</head>
<body>
<?Php



if ($_REQUEST['boton'] != ""){
if($_REQUEST['peso']<= 10){
    echo "Peso deficiente";}
elseif ($_REQUEST['peso']>10 && $_REQUEST['peso']<=20){
    echo "Peso Normal";
}
else
echo "Excedido de Peso";

}



?>
    

</body>
</html>