<?php

$associativeArray = [
    'apple' => 'fruit',
    'carrot' => 'vegetable',
    'banana' => 'fruit',
    'onion' => 'vegetable',
    'grape' => 'berry',
];

//Посчитал количество элементов в массиве с помощью функции определения размера массива.
$arraySize = count ($associativeArray);

var_dump ($arraySize);

//Перевернул массив с помощью функции замены ключей на значения.
$reversedArray = array_flip ($associativeArray);

//Определил размер перевенутого массива.
$reversedArraySize = count ($reversedArray);

var_dump ($reversedArraySize);

//результат сравнения переменных с размерами массива.
if ($arraySize != $reversedArraySize) {
    echo 'массивы не равны';
} else {
    echo 'массивы равны';
};
