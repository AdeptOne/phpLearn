<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Вывод рандомного числа от 0 до 2000: ", mt_rand(0,2000) , "<br />";
            $var = 42.43752;
            echo round($var , 2) . "\n";
            echo bindec(decbin(4252)) . "\n";
            echo bindec(decbin(89080));
            class MyClass{
                //Переменные класса.
            }
        ?>
    </body>
</html>
