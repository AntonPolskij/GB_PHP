<?php

$name = readline("Как вас зовут?\n");
$number = (int)readline("Укажите количество задач на сегодняшний день?\n");
$output = "$name, у вас сегодня запланировано $number задач на сегодня:\n";
$allTime = 0;


for($i = 0; $i <= $number; $i++) {
    $task = readline("Какая задача стоит перед вами сегодня?\n");
    $time = (int)readline("Сколько примерно времени эта задача займет?\n");
    $output .= " - " . $task . "({$time}ч)\n";
    $allTime += $time;
    $i++;
};


    echo "$output";
    echo "Примерное время выполнения плана = {$allTime}ч";

?>