<?php
/*
 PHP cuenta con funciones integradas que pueden llamarse directamente para
una tarea en especifico. Pero podemos realizar nuestras propias funciones.

 Para ello declaramos "function" seguido del nombre del bucle, como recomendacion
la funcion debe empezar con una letra o guion bajo ( No distingue las mayusculas
de las minusculas).

 Siempre, para poder ejecutar la funcion, requerimos realizar un llamado despues
de su declaración.
*/
function buclefor (){
  $numeros = array(1, 2, 3, 4, 5);

  for($i=0; $i < count($numeros); $i++){
    echo $numeros[$i]. "<br>";
  }
}

buclefor(); // Llamado a la funcion


echo "<br>";

// Ejemplo de funcion con requerimiento de parametros
function suma ($num1, $num2){
  $total = $num1 + $num2;
  echo $total;
}

suma(25, 30); //Llamado a la funcion indicando los parametros, prueba insertando otros datos