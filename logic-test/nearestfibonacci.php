<?php

function fibonacci(int $jumlahBilangan)
{
    $fibonacci = [];

    if ($jumlahBilangan < 0) {
        return $fibonacci;
    }

    for ($i = 0; $i < $jumlahBilangan; $i++) {
        if ($i < 2) {
            $bilangan = $i;
        } else {
            $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        array_push($fibonacci, $bilangan);
    }

    return $fibonacci;
}
echo implode(" ", fibonacci(5)) . '<br>';
