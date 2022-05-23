<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function foo(string $needle, array $array): bool {
    foreach ($array as $value) {
        if (is_array($value)) {
            if (in_array($needle, $value)) {
                return true;
            } else {
                if (foo($needle, $value)) {
                    return true;
                }
            }
        } else {
            if ($value == $needle) {
                return true;
            }
        }
    }
    return false;
}

$result = foo('Ключ', $box);
var_dump($result);