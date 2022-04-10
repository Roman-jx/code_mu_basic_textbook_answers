// Task 1
<form action="" method="get">
    Celsius: <input type="number" name="cel">
    <input type="submit">
    <p><?php
    if (!empty($_GET["cel"])){
        echo  ($_GET["cel"] - 32) / 1.8;
    }
?></p>
</form>

// Task 2
<form action="" method="get">
    Factorial: <input type="number" name="fac">
    <input type="submit">
    <p><?php
    if (!empty($_GET["fac"])){
        $sum = 1;
        for ($i=1; $i<$_GET["fac"]; $i++){
            $sum *= $i;
        }
        echo $sum;
    }
?></p>
</form>

// Task 3
<form action="" method="get">
    Your number: <input type="number" name="num">
    <input type="submit">
    <p><?php
    if (!empty($_GET["num"])){
        for ($i=1; $i<$_GET["num"]; $i++){
            if ($_GET["num"] % $i == 0){
                echo $i." ";
            }
        }
    }
?></p>
</form>

// Task 4
<form action="" method="get">
    Num1: <input type="number" name="num1">
    Num2: <input type="number" name="num2">
    <input type="submit">
    <p><?php
    $num = 0;
    if (!empty($_GET["num1"]) && !empty($_GET["num2"])){
        if ($_GET["num1"] > $_GET["num2"]){
            for($i=1; $i<$_GET["num1"]; $i++){
                if (($_GET["num1"] % $i == 0) && ($_GET["num2"] % $i == 0)){
                    echo $i." ";
                }
            }
        } else {
            for ($i=1; $i<$_GET["num2"]; $i++){
                if (($_GET["num1"] % $i == 0) && ($_GET["num2"] % $i == 0)){
                    echo $i." ";
                }
            }
        }
    }
?></p>
</form>

// Task 5
<form action="" method="get">
    Your number1: <input type="number" name="num1">
    Your number2: <input type="number" name="num2">
    Your number3: <input type="number" name="num3">
    <input type="submit">
    <p>
    <?php
    $a = $_GET["num1"];
    $b = $_GET["num2"];
    $c = $_GET["num3"];
    $d = pow($b, 2) - 4*$a*$c;
    $x1 = (-$b + sqrt($d))/(2*$a);
    $x2 = (-$b - sqrt($d))/(2*$a);
    echo "X1 :".$x1." and "."X2 :".$x2;
    ?>
    </p>
</form>

// Task 6
<form action="" method="get">
    Your number1: <input type="number" name="num1">
    Your number2: <input type="number" name="num2">
    Your number3: <input type="number" name="num3">
    <input type="submit">
    <p>
    <?php
    $a = $_GET["num1"];
    $b = $_GET["num2"];
    $c = $_GET["num3"];
    if ($a > $b && $a > $c){
        if (pow($a, 2) == pow($b, 2) + pow($c, 2)){
            echo "a";
        }
    } elseif ($b > $a && $b > $c) {
        if (pow($b, 2) == pow($c, 2) + pow($a, 2)){
            echo "b";
        }
    } elseif ($c > $a && $c > $b){
        if (pow($c, 2) == pow($b, 2) + pow($a, 2)){
            echo "b";
        }
    }
    ?>
    </p>
</form>