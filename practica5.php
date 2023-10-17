<Htm>
<Body>
<?Php

if ($_REQUEST['SUBMIT'] != "" )
{
echo "El apellido Ingresado es : $_REQUEST[Apellido]";
}
else
{
?>
<FORM ACTION = "practica5.php" METHOD = "POST">
<INPUT TYPE = "TEXT" NAME="Apellido">
<INPUT TYPE = "SUBMIT" NAME="SUBMIT" VALUE="Ejecutar">
</FORM>
<?Php
}
?>
</Body>
</Htm>