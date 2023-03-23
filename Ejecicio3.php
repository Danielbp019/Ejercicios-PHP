<?php
//Ejecicio 3  ****************************

//se reciben dos cadenas de texto
function Transformar($cadena1, $cadena2) {
  //se define dos variables $posicion1 y $posicion2, que se utilizan para recorrer las dos cadenas de texto
  $posicion1 = 0;
  $posicion2 = 0;

  //se cargan las posiciones con el numero de caracteres que contiene la cadena de texto
  while ($posicion1 < strlen($cadena1) && $posicion2 < strlen($cadena2)) {
    //se comparan las dos cadenas
    if ($cadena1[$posicion1] == $cadena2[$posicion2]) {
      //si el caracter coindice avanza a la siguiente posicion
      $posicion1++;
      $posicion2++;
    } else {
      //si no coincide avanza solo en la cadena 1
      $posicion1++;
    }
  }
  //se devuelve true si la posición actual en la cadena2 es igual a la longitud de la cadena2, lo que significa que se han encontrado todos los caracteres de la cadena2 en la cadena1.
  return $posicion2 == strlen($cadena2);
}

//se asignan las cadenas de texto para comparar
$cadena1 = "compromiso";
$cadena2 = "piso";

// $cadena1 = "programacion";
// $cadena2 = "juego";

//respuesta
if (Transformar($cadena1, $cadena2)) {
  echo "Es posible transformar '$cadena1' en '$cadena2' eliminando algunos caracteres.";
} else {
  echo "No es posible transformar '$cadena1' en '$cadena2' eliminando algunos caracteres.";
}
