// Task 1
<?php
setcookie("name", "John", time() + 60 * 60);
setcookie("name", "", time());
var_dump($_COOKIE["name"]);
?>

// Task 2
<?php
if (isset($_COOKIE["name"])){
    setcookie("name", "", time());
    unset($_COOKIE["name"]);
}
var_dump($_COOKIE["name"]);
?>