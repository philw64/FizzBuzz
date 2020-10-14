#!/usr/bin/php
#
# FizzBuz in PHP
#

<?php

for ($num = 1; $num <= 100; $num++) {
    $str = $num % 3  != 0 ? "" : "Fizz";

    $str .= $num % 7 != 0 ? "" : "Buzz";

    if ($str !== '') {
      echo $str;
    } else {
      echo $num;
    }
    echo PHP_EOL;
}


