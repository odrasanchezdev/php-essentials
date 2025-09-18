<?php
/*
 En el archivo anterior, trabajamos con Variables, que son elementos cuyo valor puede
cambiar conforme a la ejecucion (esta se realiza leyendo de arriba a abajo el codigo)
 En el siguiente caso de ejemplo podemos ver la aplicacion de la Variable conforme a la ejecucion
*/

$numero1 = 5;
$numero2 = 5;

/* 
 Si realizamos la suma de los numeros anteriores el valor sera 10, pero al incluir la 
siguiente variable (a esto se le llama sobre-escritura), PHP tomara este iltimo valor
para la ejecucion del programa. Dando como resultado 15
*/

$numero1 = 10;

$suma = $numero1 + $numero2;

echo $suma;
echo "<br>";

/*
Para dejar estatico o fijado el valor de nuestra variable, debemos realizar una
la siguiente estrucutra para las constantes
*/

define("numero1",5); //Teniendo la estrucutra siguiente: nombre de la constante y su valor$numero2 = 5;

$suma = numero1 + $numero2; //Para mandar a llamar a la constante, no usamos el signo de $

echo $suma;