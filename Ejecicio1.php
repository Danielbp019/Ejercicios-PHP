<?php

function countSegments($seconds)
{
  //el digito 0=6, 1=2, 2=5, 3=5, 4=4, 5=5, 6=6, 7=3, 8=7 , 9=6, segmentos encendidos en cada digito.
  $hourSegments = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6); // número de segmentos encendidos por cada dígito de la hora
  $minuteSegments = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6); // número de segmentos encendidos por cada dígito de los minutos y segundos

  $totalSegments = 0;

  for ($i = 0; $i < 24; $i++) { // iterar a través de cada hora
    $hourSegmentsOn = $hourSegments[floor($i / 10)] + $hourSegments[$i % 10];
    for ($j = 0; $j < 60; $j++) { // iterar a través de cada minuto
      $minuteSegmentsOn = $minuteSegments[floor($j / 10)] + $minuteSegments[$j % 10];
      for ($k = 0; $k < 60; $k++) { // iterar a través de cada segundo
        $totalSegments += $hourSegmentsOn + $minuteSegmentsOn + $minuteSegments[floor($k / 10)] + $minuteSegments[$k % 10];
        if (($i * 3600 + $j * 60 + $k) >= $seconds) {
          return $totalSegments;
        }
      }
    }
  }

  return $totalSegments;
}

//numero de segundos
//$seconds = 0;
$seconds = 2;
//$seconds = 10;

//respuesta
echo countSegments($seconds);
