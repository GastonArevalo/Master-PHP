<?php
/*
TIPOS DE DATOS:
Entero (int)= 77 integer
Float (decimales)= 7.3 double
Strings(caracteres)= 'Texto' o "Texto"
Bolean(bool)= 1 o 0 sino True o False
null
arrays (vectores)= 
objetos
Una veriable nunca puede comenzar con un numero pero si puede poseerlo
No se pueden colocar signos de operaciones
*/

$numero = 100;
$decimal = 27.9;
$texto= "soy un text";  
$verdadero = True;
$texto2 = "Hola yo soy un numero que vale \" \n $numero ";//aplicando salto de linea, se muestra solo en consola, el navegador no lo reconoce//
$texto3 = 'Hola soy un numero que vale'.$numero;
//funcion para averiguar que tipo de variable es//
echo gettype($numero);
echo gettype($decimal);
echo gettype($texto);
echo gettype($verdadero);

//debugear//
$mi_nombre = "Lucas Gaston";
var_dump($mi_nombre);



//para mostrar una variable dentro de un string siempre y caundo se usen comillas dobles"" //


echo($texto2);


//pero a la hopra de usar comillas simples, es menor la cantidad de recursos a la hora de procesarlo, a pesar que puede mopstrar el mismo resultado//
echo($texto3);






?>