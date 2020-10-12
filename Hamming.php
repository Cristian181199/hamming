<?php

/**
 * @author Cristian Quintero García
 * @copyright Copyright {c} 2020 Cristian Quintero
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

/*
 * Programa que mide la distancia hamming de dos cadenas.
 * 
 * Con "mb_strlen" obtenemos la longitud de una cadena de caracteres y con la estructura "if" comprobamos si tienen distinta longitud con el "!="
 * en el caso que tubieran distinta longitud, retornamos false.
 * 
 * Con "mb_str_split" pasamos de cadena a array de cada uno de sus caracteres y "array_diff_assoc" calcula la diferencia entre arrays con un
 * chequeo adicional de índices.
 * 
 * Finalemnte con el count, contamos la diferencia entre arrays y la retornamos.
 */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }
    return count(array_diff_assoc(mb_str_split($a), mb_str_split($b)));
}
