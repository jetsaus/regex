<?php
/*
 * С помощью цикла while выведите все числа в промежутке от 0 до 100,
 * которые делятся на 3 без остатка
 * Консольная версия
 */
echo <<<TASK
Задание №1
С помощью цикла while выведите все числа в промежутке от 0 до 100,
которые делятся на 3 без остатка.\r\n\r\n
TASK;
echo "Числа, которые делятся на 3 без остатка:\r\n";
$i = 0;
while ($i <= 100) {
    if (($i % 3) == 0) {
        echo "$i ";
    }
    $i++;
}
?>