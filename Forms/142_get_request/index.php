// Task
<?php
echo $_GET["num"];
?>

// Task 2
<?php
echo pow($_GET["num"], 2) ;
?>

// Task 3
<?php
echo $_GET["num1"] + $_GET["num2"];
?>

// Task 4
<?php
if ($_GET["num"] == "1"){
    echo "hello";
} else {
    echo "bye";
}
?>

// Task 5
<?php
$arr = ["a", "b", "c", "d", "e"];
echo $arr[$_GET["num"]];
?>
