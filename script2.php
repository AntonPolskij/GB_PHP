<?php
$name = readline("Введите имя?" . PHP_EOL);

$wishes = ["счастья", "здоровья", "разума", "увлечения", "богатства", "терпения", "везения", "благополучия","трудолюбия"];
$syn = ["блистательного", "незабываемого", "долгого", "настоящего", "крепкого", "полного", "душевного", "головокружительного"];


for ($i = 0; $i < 3; $i++) {
    $randSyn = $syn[array_rand($syn)];
    unset($syn[array_search($randSyn,$syn)]);
    $randWish = $wishes[array_rand($wishes)];
    unset($wishes[array_search($randWish,$wishes)]);
    $generWish[$i] = implode(" ", [$randSyn, $randWish]);
}

$text = "Дорогой {$name} , от всего сердца поздравляю тебя с днем рождения, желаю {$generWish[0]}, {$generWish[1]} и {$generWish[2]}!";


echo $text;
