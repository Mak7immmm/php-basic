<?php

// Создаем ассоциативный массив с ключами 'a', 'b', 'c'.
$associativeArray = [
    'a' => 'word a',
    'b' => 'word b',
    'c' => 'word c',
];

// Создаем простой массив, содержащий строку, полученную путем объединения ключей из ассоциативного массива.
$simpleArray = [implode(' ', array_keys($associativeArray))];

// Создаем строку, объединяя элементы простого массива через пробел.
$string = implode (" ", $simpleArray);

echo $string;
