<?php

$str = 'Я люблю море. Я лечу на море. Я умею плавать в море. Какое чистое море! Хочу на море. Завтра поедем на море';

//Заменяем все символы, кроме букв кириллицы и ё, на пробелы.
$str = preg_replace ("/[^а-яёА-ЯЁ]+/iu", ' ', $str);

//Разбиваем строку на слова, используя пробел как разделитель с помощью разделения строки на массив подстрок.
$words = explode (' ', $str);

//Создаем массив, содержащий количество повторяющихся слов.
$repeatedWords = array_filter (array_count_values ($words), function($count) {
    return $count > 1;
});

//Преобразуем ключи повторяющиеся слова в строку.
$repeatedWordsStr = implode (' ', array_keys($repeatedWords));

//Заменяем "Я" "море" "на" на "Я" море" "на".
$text = str_replace ('Я', 'Я', $repeatedWordsStr);
$text = str_replace ('море', 'море', $repeatedWordsStr);
$text = str_replace ('на', 'на', $repeatedWordsStr);

//Переворачиваем строку с повторяющимися словами задом наперёд.
$repeatedText = mb_strrev ($text, 'UTF-8');

var_dump($repeatedText);
