<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            /*
                Для подключения единожды можно,
                использовать include_once и require_once .
            */

            // Подключение библиотек
            include "bindec.php";
            require "redeclare.php";
            require_once "define.php";
            echo "Вывод рандомного числа от 0 до 2000: ", mt_rand(0,2000) , "<br />";

            // Округление переменной var до двух знаков после точки
            $var = 42.43752;
            echo round($var , 2) . "\n";

            // Вывод констант из define.php
            echo "<br />", NUMBER , "<br />"; // 1
            echo VALUE , "<br />";// Hello, world!

            // Формируем случайное число от 1 до 10
            $index = mt_rand(1, 10);

            // Формируем имя константы
            $name = "VALUE($index)";

            // Определяем константу с динамическим именем
            define($name, 1);

            // Получаем значение константы
            echo constant($name);
        ?>
    </body>
</html>
