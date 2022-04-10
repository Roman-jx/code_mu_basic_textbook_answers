// Task 1 
<?php
session_start();
if (!empty($_GET)){
    $_SESSION["name"] = $_GET["name"];
    $_SESSION["surname"] = $_GET["surname"];
    $_SESSION["age"] = $_GET["age"];
}
echo $_SESSION["name"]." ".$_SESSION["surname"]." ".$_SESSION["age"];
?>