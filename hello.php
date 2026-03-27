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
echo $my_bool;

echo "El valor de mi integer es $my_int y el de mi boolen es $my_bool.\n";

//Constantes

const MY_CONSTANT = "Valor de la constane";
echo $MY_CONSTANT . "\n";

//Listas

$my_array = [$my_String, $my_int, $my_double];
echo gettype($my_array) . "\n";
echo $my_array[0] . "\n";
array_push($my_array, $my_bool);
print_r($my_array);
// echo $my_array[4] . "\n"; ERROR

//Diccionario

$my_dict = array("string" => $my_String, "int",$my_int, "bool" => $my_bool);
echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["int"] . "\n";

//Flujos

for ($index = 0; $index <= 10; $index++){
    echo $index . "\n";
}
//prueba de contri...
?>