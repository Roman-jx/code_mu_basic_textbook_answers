// Task 1
<?php
session_start();
if (!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 1;
} else {
    if ($_SESSION["counter"] == 10){
        $_SESSION["counter"] = 0;
    }
    $_SESSION["counter"]++;
}
echo $_SESSION["counter"];
?>