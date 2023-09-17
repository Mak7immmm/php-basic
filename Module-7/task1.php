<?php

$searchRoot = '\xampp';      // Папка (директория), с которой мы начинаем поиск.
$searchName = 'test.txt';    // Имя искомого файла.
$searchResult = [];          // Массив для хранения результатов поиска.

// Функция для рекурсивного поиска файла в директориях и поддиректориях.
function searchFile($searchRoot, $searchName, &$searchResult) {
    if (is_dir($searchRoot)) {                                             // Проверяем, является ли указанный путь директорией.
        $files = scandir($searchRoot);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {                           // Исключаем директории - текущую (.) и родительскую (..
                $fullPath = $searchRoot . DIRECTORY_SEPARATOR . $file;     // Состовляем полный путь к файлу или директории.
                if (is_dir($fullPath)) {                                   // Проверяем, является ли текущий элемент поддиректорией.
                    searchFile($fullPath, $searchName, $searchResult);  // Если да, делаем рекурсивный вызов функции для этой поддиректории.
                } elseif ($file == $searchName) {                          // Если текущий файл соответствует искомому, добавляем его полный путь в результаты поиска.
                    $searchResult[] = $fullPath;                           // Сохраняем полный путь к найденному файлу.
                }
            }
        }
    }
}

searchFile($searchRoot, $searchName, $searchResult);

// Фильтруем результаты поиска, оставляя только файлы размером 0 байт.
$searchResult = array_filter($searchResult, function($emptyFile){
    return filesize($emptyFile) == 0;
});

// Выводим результаты поиска или сообщение о том, что ничего не найдено
if ($searchResult != NULL) {
    var_dump($searchResult);
} else {
    echo 'Поиск не дал результатов' . PHP_EOL;
}
