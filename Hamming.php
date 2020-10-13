<?php

/**
 * @author Cristian Quintero García
 * @copyright Copyright {c} 2020 Cristian Quintero
 * @license https://www.gnu.org/licenses/gpl-3.0.txt
 */

function distancia($a, $b)
{
    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }
    return count(array_diff_assoc(mb_str_split($a), mb_str_split($b)));
}
