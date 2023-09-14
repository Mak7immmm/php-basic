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
    echo "массивы не равны\n";
} else {
    echo "массивы равны\n";
};

//Взяты значения из перевенутого массива, с помощью функций разбиения массива на значения.
$reverseArrayValue = array_values ($reversedArray);

//Добавление нового элемента к уже существующим элементам, с помощью функции объединения массивов.
$reverseArrayValueNew = array_merge ($reverseArrayValue, ['nut']);

//Объединение массива $reverseArrayValueNew со значениями массива $associativeArray
//с помощью функций array_merge (обединения массивов) и array_values (взятие значения из массива).
$mergedArray = array_merge (array_values ($associativeArray), $reverseArrayValueNew);

var_dump($mergedArray);
