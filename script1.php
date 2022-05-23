<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$odd_even = function (int $number): string {
    // if ($number % 2) {
    //     return "нечетное";
    // } else {
    //     return "четное";
    // }
    return $number & 1 ? $number . " - " . "нечетное" :  $number . " - " . "четное";
};

$result = array_map($odd_even, $arr);

print_r($result);