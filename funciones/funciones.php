<?php

//Funcion que nos imprima los dados con los resultados de cada jugador

function printDados(array $array): string
{
    $output = "<td>";

    for ($i = 0; $i < count($array); $i++) {
        $output .= "<img src='dados/" . $array[$i]  . ".jpg' alt='' width='40px' style='margin: auto; display: block;'><br>";
    }

    $output .= "</td>";

    return $output;
}

//Funcion que los de el total de los resultados de cada Jugador

function totalJugador(array $array1, array $array2): int
{

    $dato1 = array_sum($array1);
    $dato2 = array_sum($array2);

    return $dato1 + $dato2;
}

//Funcion que nos de el ganador

function ganador(int $num1, int $num2): string
{
    $output = "";
    if ($num1 > $num2) {
        $output .= "Gana Jugador 1";
    } else {
        $output .= "Gana Jugador 2";
    }
    return $output;
}
