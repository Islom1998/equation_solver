<!DOCTYPE HTML>
<html>

<body>
    <h1>ax^2+bx+c=0</h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="GET">
        a = <input type="text" name="a"><br><br>
        b = <input type="text" name="b"><br><br>
        c = <input type="text" name="c"><br><br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (empty($_GET["a"]) || empty($_GET["b"]) || empty($_GET["c"])) {
            echo "enter all indexes";
        }
        if (!is_numeric($_GET["a"]) || !is_numeric($_GET["b"]) || !is_numeric($_GET["c"])) {
            echo "enter number";
        }
        $a = (float) $_GET["a"];
        $b = (float) $_GET["b"];
        $c = (float) $_GET["c"];
        $root = (float) ($b * $b - 4 * $a * $c);


        echo "your equation is: ".$a."x^2+(".$b.")x+(".$c.")=0"."<br>";
        if ($a == 0) {
            echo "<br>a can not be zero";
        } else {
            if ($root < 0) {
                echo "<br>this equation has no solution";
            } elseif ($root == 0) {
                echo "this equation has one solution: " . (-1 * $b / 2 / $a );
            } else {
                $x1 = (-1 * $b - sqrt($root)) / (2 * $a * $c);
                $x2 = (-1 * $b + sqrt($root)) / (2 * $a * $c);
                echo "this equation has two solutions: " ."<br>". $x1 ."<br>". $x2;
            }
        }
    }

    ?>

</body>

</html>