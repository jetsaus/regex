<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 4</title>
</head>
<body>
<h3>Задание №4:</h3>
<h5>1:</h5>
<p><i>Имеется каталог товаров. В каждой строке название товара и его цена разделены табуляцией. В некоторых строках вместо одного TABa стоит два. Составьте регулярное выражение, которое бы заменило все двойные TABы на одинарные</i></p>
<p><i>Исходный массив:</i></p>
<?php
    $arr = [
        'goods1		15',
        'goods2	17.5',
        'goods3		20',
        'goods4		21',
        'goods5	18',
    ];
    $arrResult = [];
    var_dump($arr);
    echo '<h3>Решение:</h3>';
    $pattern = "~\t\t~";
    $replacement = "\t";
    foreach ($arr as $str) {
        // Удаление двойных TAB, заменой на один TAB
        $arrResult[] = preg_replace($pattern, $replacement, $str);
    }
    echo '<p><i>Готовый массив:</i></p>';
    var_dump($arrResult);
?>

<h5>2:</h5>
<p><i>Имеются строки, разделенные переносами. Некоторые строки отделены двумя переносами. Составьте регулярное выражение, которое бы убрало лишние переносы строк.</i></p>
<h3>Решение:</h3>
<p>Регулярное выражение в контексте PHP: $buffer = preg_replace("~\r\n\r\n~", "\r\n", $contents);</p>
<p><i>Из командной строки необходимо запустить консольный скрипт hw4c.php. Он подхватит из текущего каталога файл in.txt, удалит в нем строки с двойным переводом строки и результат запишет в out.txt текущего каталога.</i></p>





</body>
</html>