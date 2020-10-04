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
            include "bindec.php";
            require "redeclare.php";
            echo "Вывод рандомного числа от 0 до 2000: ", mt_rand(0,2000) , "<br />";
            $var = 42.43752;
            echo round($var , 2) . "\n";
            $point = new Point;
            $point->x = 5;
            $point->y = 3;
            echo "<br />Вывод X: " . $point->x;
            
        ?>
    </body>
</html>
