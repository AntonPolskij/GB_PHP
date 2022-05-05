<?php

$value = (int)readline("Введите число\n");

switch ($value % 10) {
    case 1: echo "$value яблоко";
        break;
    case 2:
    case 3:
    case 4: echo "$value яблока";
        break;
    default: echo "$value яблок";
        break;
}

?>