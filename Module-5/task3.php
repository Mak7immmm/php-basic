<?php

$letters = ['A', 'B'];  // Массив из букв A и B
$combinationCount = 0;  // Инициализируем переменную для подсчета комбинаций

// Перебираем каждую букву из массива
foreach ($letters as $letter1) {
    foreach ($letters as $letter2) {
        foreach ($letters as $letter3) {
            for ($number = 0; $number <= 999; $number++) {
                $formattedNumber = str_pad($number, 3, "0", STR_PAD_LEFT);     // Форматируем число.
                $combination = $letter1 . $formattedNumber . $letter2 . $letter3;                       // Составляем серию.

                echo $combination. "\n";

                $combinations [] = $combination;   // Массив комбинаций номеров.
                $combinationCount++;               // Увеличиваем счетчик комбинаций.
            }
        }
    }
}

// Перебираем массив комбинаций и выводим все значения.
foreach ($combinations as $combination) {
    var_dump($combination);
}

// Перебираем массив комбинаций и выводим только те, в которых три цифры одинаковые.
foreach ($combinations as $combination) {
    if (preg_match('/(.)\1\1/', $combination)) {
        echo $combination . "\n";
    }
}
