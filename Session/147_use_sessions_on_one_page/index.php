// Task 1
<?php
session_start();
if (!isset($_SESSION["counter"])){
    $_SESSION["counter"] = date("i:s", mktime(0, 0, 0, 0, 0, 0, 0));
} else {
    $_SESSION["counter"] += time();
}
echo $_SESSION["counter"];
?>