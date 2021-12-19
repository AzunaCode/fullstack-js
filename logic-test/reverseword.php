<?php

$str = "I am A Great human";

echo reverse_word($str) . "\n";

function reverse_word($input)
{
    $num_ws = 0;
    $p = 0;
    while (strpos($input, " ", $p) !== false) {
        $num_ws++;
        $p = strpos($input, ' ', $p) + 1;
    }

    $p = 0;
    for ($i = 0; $i < $num_ws + 1; $i++) {
        $ws_index = strpos($input, " ", $p);
        if ($ws_index === false) {
            $word = substr($input, $p);
        } else {
            $length = $ws_index - $p;
            $word = substr($input, $p, $length);
        }
        $result[] = $word;
        $p = $ws_index + 1;
    }

    $str = '';
    for ($i = 0; $i < count($result); $i++) {
        $str .= reverse($result[$i]) . " ";
    }
    return $str;
}

function reverse($str)
{
    $a = 0;
    $b = strlen($str) - 1;
    while ($a < $b) {
        swap($str, $a, $b);
        $a++;
        $b--;
    }
    return $str;
}

function swap(&$str, $i1, $i2)
{
    $tmp = $str[$i1];
    $str[$i1] = $str[$i2];
    $str[$i2] = $tmp;
}
