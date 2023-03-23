<?php
//Ejecicio 2    *****************************

function SubcadenaNoRepetida($cadena) {
    $longitudMaxima = 0; // longitud de la subcadena más larga sin caracteres repetidos
    $inicio = 0; // indice de inicio de la subcadena actual sin caracteres repetidos
    $caracteres = array(); // array para mantener un registro de los caracteres vistos

    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        // si el caracter ya esta en la subcadena actual, actualizamos el indice de inicio
        if (isset($caracteres[$caracter]) && $caracteres[$caracter] >= $inicio) {
            $inicio = $caracteres[$caracter] + 1;
        }

        // actualizamos la posición del ultimo visto del caracter en el array
        $caracteres[$caracter] = $i;

        // actualizamos la longitud máxima si la longitud actual es mayor
        $longitudActual = $i - $inicio + 1;
        $longitudMaxima = max($longitudMaxima, $longitudActual);
    }
    return $longitudMaxima;
}
//se asignan la cadena de texto
$cadena = "abcabcbb";

//respuesta
echo SubcadenaNoRepetida($cadena);
