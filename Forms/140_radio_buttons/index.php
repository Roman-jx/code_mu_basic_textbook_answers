// Task 1
<form action="" method="get">
    <input type="radio" name="radio" value="m" checked>
    <input type="radio" name="radio" value="f">
    <input type="submit">
</form>
<?php
if (!empty($_GET["radio"])){
    if ($_GET["radio"] == "m"){
        echo "male";
    } else {
        echo "female";
    }
}
?>

// Task 2
<form action="" method="get">
    ua<input type="radio" name="radio" value="1" <?php if(!empty($_GET["radio"]) and $_GET["radio"] == "1") echo "checked";?>>
    ru<input type="radio" name="radio" value="2" <?php if(!empty($_GET["radio"]) and $_GET["radio"] == "2") echo "checked";?>>
    en<input type="radio" name="radio" value="3" <?php if(!empty($_GET["radio"]) and $_GET["radio"] == "3") echo "checked";?>>
    <input type="submit">
</form>