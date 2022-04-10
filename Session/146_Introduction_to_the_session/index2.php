<?php
require_once "index.php";
session_start();
echo $_SESSION["name"];
?>