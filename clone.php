<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            require 'point.php';

            $first = new Point;
            $first->x = 3;
            $first->y = 3;

            $second = clone $first;

            $second->x = 5;
            $second->y = 5;

            echo "x: {$first->x}, y: {$first->y}"; // x: 3, y:3
        ?>
    </body>
</html>
