<?php
require_once "index.php";
$pass = "12345";
echo $_GET["text2"] + $_GET["text1"] + $_GET["text3"];

echo $_POST["name"] . " " . $_POST["age"];

echo "Your password is ".(bool)($_POST["pass"] == $pass);
?>