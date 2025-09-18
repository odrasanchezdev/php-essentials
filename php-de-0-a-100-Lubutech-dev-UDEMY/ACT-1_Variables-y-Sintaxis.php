<?php
/* 
 En PHP, las variables se crean con el signo de dolar "$" seguido del nombre.
 Se pueden guardar distintos tipos de valores: texto (string), numeros (int, float), booleanos, etc.
*/

$variable = "Hola Mundo";     // Guardamos una cadena de texto
$variable2 = ", soy Andy";    // Otra cadena de texto

/* 
 Concatenacion de cadenas:
 Para unir dos textos usamos el punto "." en lugar del signo "+" (como en otros lenguajes).
 Ejemplo: "Hola Mundo" + ", soy Andy" → "Hola Mundo, soy Andy". Si quisieramos imprimir el resultado:
*/

echo $variable . $variable2. " " . ". Antes de este texto, contamos con un espacio";

// Para incluir saltos de linea, podemos usar la etiqueta "break" de HTML
echo '<br>';

//////////////////////////////////////////////////////////////

/*
 Ahora, trabajemos con numeros.
 Para numeros NO usamos comillas, solo los escribimos directamente.
*/

$numero1 = 6;   // Numero entero
$numero2 = 9;   // Otro numero entero

// Podemos hacer operaciones aritmeticas basicas (+, -, *, /, %).
$suma = $numero1 + $numero2; // Guardamos el resultado de la suma de 6 + 9

// echo se utiliza para mostrar en pantalla el contenido de una variable o un texto.
echo $suma; // Mostrara "15"
