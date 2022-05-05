<?php
$a1 = 810;
$a2 = 988;
$a3 = 740;
$answer = readline("В каком году произошло Крещение Руси?\nВарианты ответа:\n{$a1} год\n{$a2} год\n{$a3} год\n");



if (!($answer == $a1 || $answer == $a2 || $answer == $a3)) {
    do {
    $answer = readline("Ответ некорректен! Повторите ввод\nВ каком году произошло Крещение Руси?\nВарианты ответа:\n{$a1} год\n{$a2} год\n{$a3} год\n");
} while (!($answer == $a1 || $answer == $a2 || $answer == $a3));
};



switch ($answer) {

    case $a2: echo "Правильно!";
        break;

    default: echo "Ответ неверный";
        break;
    };

?>