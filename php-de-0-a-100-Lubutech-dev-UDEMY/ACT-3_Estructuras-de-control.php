<?php
/*
 Estas estructuras nos permiten recorrer un conjunto de datos
por ejemplo un array, que puede contener una colección de objetos


 La extraccion utiliza indices, por lo que es necesario conocer 
la cantidad de datos existentes en el array, sin importar que 
tipo de datos son. Para ello utilizamos la funcion count
*/

$nombre = "Andy";
$array = array(1, 2, 3, "casa", $nombre);

$longitud = count($array);



/////////////////////////////////////////////////////////////////
/*
  ESTRUCTURA FOR: Esta estrcutura realizara un recorrido de los 
datos hasta agotar el tamaño de longitud de datos que contiene 
el array

De manera breve, esta estructura requiere de 3 datos: i - 
variable daclarada en la misma estructura para indicar que el 
indice por el que iniciara el ciclo es el indice 0; la condición,
el largo que recorrera - que debe ser menor a la longitud del 
arreglo y finalmente la forma en la que incrementara los indices
(en este caso lo hará de uno en uno)
*/

for ($i=0; $i<$longitud; $i++){
 echo $array[$i]; // Con esto, proyectamos en pantalla el valor del indice actual
 echo "<br>";
}

echo "<br>";
echo "<br>";




/////////////////////////////////////////////////////////////////
/*
 ESTRUCTURA FOREACH: Se realiza la lectura del indice del valor 
se almacena en la variable $key. Ahora se encuentra el valor que
contiene ese indice, y se almacena temporalmente en la variable 
$value. Recorriendo el array hasta agotar la longitud, sin importar
el tamaño de esta
*/

foreach ($array as $key => $value){
  echo $value . "<br>";
}


echo "<br>";
echo "<br>";



/////////////////////////////////////////////////////////////////
/*
  ESTRUCTURA WHILE: Se ejecutara mientras la condicion sea
verdadera. Es el tipo más simple de bucle, se comporta igual
a la estrcutra WHILE en el lenguaje C. Se suele utilizar en 
contadores numericos.

Esta cuenta con la estrcutra similar al bucle for
*/
$i = 1;  // Inicio de la estrucutra - un dato numerico en 1
while ( $i <= 10){  // Realizar la ejecucion hasta el numero 10
  echo $i++ . "<br>"; // Imprimir el incremento de 1 en 1 DEL INDICE
}

echo "<br>";
echo "<br>";

$frutas = array("Mango", "Pera", "Uva", "Manzana");
// TODOS LOS ARREGLOS TIENEN POR INDICE PRINCIPAL EL NUMERO 0
$i = 0;
while ($i < count($frutas)) {
  echo $frutas[$i] . "<br>";
  $i++;
}


echo "<br>";
echo "<br>";



/////////////////////////////////////////////////////////////////
/*
  ESTRUCTURA IF: Ejecuta un bloque de codigo solo si una condicion
especifica se evalúa como verdadera. La condicion puede ser cualquier
expresion que se resuelva como un valor booleano, como comparaciones
o llamadas a funciones.
*/

$usuario = "Carmen";
$password = "Carmen";

if($usuario == $password){  //La sentencia verifica si son iguales, para revisar si son diferentes reemplamos por "!="
  echo "Coinciden";
}
else{
  echo "No coinciden";
}


echo "<br>";
echo "<br>";



/////////////////////////////////////////////////////////////////
/* 
  ESTRUCTURA DOWHILE: Ciclo que ejecutara una vez el bloque de codigo,
luego verificara la condicion y repetira mientras la condicion especificada
sea verdadera
*/
$i = 1;

do {
  echo "Numero: $i <br>";
  $i++;
} while ($i <= 10);


echo "<br>";
echo "<br>";




/////////////////////////////////////////////////////////////////
/* 
  ESTRUCTURA SWITCH: Dependera de una condicion para ejecutar una serie de
lineas. Esta condicion se trata de un valor. Así el switch siempre dependera
de una variable, y de todos los valores que esta pueda tomar.

 Puede entenderlo de manera más fácil como un menú de opciones, donde cada
pedido corresponde a un platillo especifico.
*/
$opcion = 2;

switch ($opcion) {
  case 1:
    echo "$opcion es igual a 1";
    break;
  
  case 2:
    echo "$opcion es igual a 2";
    break;
  
  case 3:
    echo "$opcion es igual a 3";
    break;
  
}