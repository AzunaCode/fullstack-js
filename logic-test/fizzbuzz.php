<?php
for ($i = 1; $i <= 3; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz \n";
    } else if ($i % 3 == 0) {
        echo "Fizz \n";
    } else if ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo $i . " \n";
    }
}

echo "<br/>";
for ($i = 1; $i <= 5; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz \n";
    } else if ($i % 3 == 0) {
        echo "Fizz \n";
    } else if ($i % 5 == 0) {
        echo "Buzz \n";
    } else {
        echo $i . " \n";
    }
}

echo "<br/>";
for ($i = 1; $i <= 15; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz \n";
    } else if ($i % 3 == 0) {
        echo "Fizz \n";
    } else if ($i % 5 == 0) {
        echo "Buzz \n";
    } else {
        echo $i . " \n";
    }
}
