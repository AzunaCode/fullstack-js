<?php

function isLeap($year)
{
    return (date('L', mktime(0, 0, 0, 1, 1, $year)) == 1);
}

for ($year = 1900; $year <= 2020; $year++) {
    if (isLeap($year)) {
        echo "$year \n";
    } else {
        echo "";
    }
}
