<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 2,
        'Курпатов Николай' => 4,
        'Алешова Евгения' => 2,
        'Кондратьев Павел' => 3
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Калугин Олег' => 2,
        'Дмитров Никита' => 5,
        'Шахин Иван' => 5
    ]
];

    $result = 0;
    $top = '';
    $expulsion = [];

foreach($students as $groupName => $group) {
    $sum = 0;

    foreach($group as $student => $grade) {
        $sum += $grade;
        if ($grade < 3) {
            $expulsion[] = "${groupName} - {$student}";
        }
    }

    $mid = $sum / count($group);

    if ($result < $mid) {
        $result = $mid;
        $top = $groupName;
    }
}


echo "Лучшая группа по успеваемости {$top}" . PHP_EOL;

print_r($expulsion);

