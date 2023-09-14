<?php

$a = rand(0,1);
$b = ($a == 0) ? null : rand(1,3);

switch ($b) {
    case null:
        echo "пусто";
        break;
    case 1:
        echo "1";
        break;
    default:
        echo "больше 1";
}

var_dump(isset($b));

$c = $b ?? rand(20,30);
