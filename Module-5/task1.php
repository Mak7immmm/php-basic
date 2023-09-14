<?php


$str = 'caesar cipher';   // Исходная строка для шифрования.
$shift = 18;              // Количество позиций для сдвига.
$encryptedStr = ' ';      // Переменная дяя зашифрованной строки.

for ($i = 0; $i < strlen($str); $i++) {
    $char = $str[$i];
    if ($char == ' ') {                                                 // Если символ пробел оставляем его без изменений.
        $encryptedStr .= $char;
    } else {
        $ascii = ord($char);                                            // Применяем шифр Цезаря для букв в нижнем регистре.
        $shiftedAscii = (($ascii - 97 + $shift) % 26 + 26) % 26 + 97;   // Преобразуем полученный ASCII код обратно в символ.
        $encryptedStr .= chr($shiftedAscii);
    }
}

echo $encryptedStr . "\n";

$decryptedStr = " ";   // Переменная для расшифрованной строки.

for ( $i = 0; $i < strlen($encryptedStr); $i++) {
    $char = $encryptedStr[$i];
    if ($char == ' ') {
        $decryptedStr .= $char;
    } else {
        $ascii = ord($char);
        $shiftedAscii = (($ascii - 97 - $shift) % 26 + 26) % 26 + 97;   // Применяем обратное шифрование Цезаря для букв в нижнем регистре.
        $decryptedStr .= chr($shiftedAscii);
    }
}

echo $decryptedStr;
