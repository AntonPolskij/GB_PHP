<?php

$arr1 = range(1,200,1);
$arr2 = [];

for($i = 0; $i < 100; $i++) {
    $value = $arr1[array_rand($arr1)];
    while (in_array($value, $arr2)) {
        $value = $arr1[array_rand($arr1)];
    }
    $arr2[] = $value;
}

print_r($arr1);
print_r($arr2);