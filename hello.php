<?php
echo "helloo Mel \n";

$my_String = "esto es cadena";
$my_String = "cabio ahhhh xxd";
$my_String = 6; // tipado dinamico
echo $my_String . "\n";
echo gettype($my_String) . "\n";
$my_String = "esto es cadena";
$my_String = 22;
echo $my_String . "\n";

$my_int = 7;
$my_int = $my_int + 4;
echo $my_int . "\n";
echo $my_int - 1 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";

$my_double = 6.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . "\n";
//echo $my_int + $my_double + $my_String . "\n"; -- esto no se permite

$my_bool = true;
echo $my_bool . "\n";
$my_bool = false;
echo $my_bool


?>