<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function foo (array $array): array
{   
    $newArray = [];
    sort($array);
    $newArray['max'] = $array[0];
    $newArray['min'] = $array[count($array)-1];
    $newArray['avg'] = (int)(array_sum($array) / count($array));
    return $newArray;
}

$result = foo($arr);

print_r($result);