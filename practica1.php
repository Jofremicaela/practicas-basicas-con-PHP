<?php
$n = $_SERVER['HTTP_USER_AGENT'];
$ie = strpos($n, 'MSIE');
$f = strpos($n, 'Firefox');
$c = strpos($n, 'Chrome');
$s = strpos($n, 'Safari');
echo "<center><H1><br>";
if ($ie!="") echo "Estas utilizando: Internet Explorer";
else
if ($f !="")
echo "Estas utilizando: Firefox";
else
if ($c !="")
echo "Estas utilizando: Google Chrome";
else
if ($s !="")
echo "Estas utilizando: Safari";
echo"<Br><Br>";
?>