// Task 1
<form action="" method="get">
    <input type="checkbox" name="flag">
    Your name: <input name="name">
    <input type="submit">
</form>

<?php
if (isset($_GET)){
    if (isset($_GET["flag"])){
        echo "Hello, ".$_GET["NAME"];
    } else {
        echo "Bye!!!";
    }
}

?>

// Task 2
<form action="" method="get">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="1">
    <input type="text" name="age">
    <input type="submit">
</form>
<?php
if (!empty($_GET["age"])){
    if ($_GET["age"] > 18 and $_GET["flag"] == "1"){
        echo "Okey";
    } else {
        echo "No";
    }
}

?>

// Task 3
<form action="" method="get">
    <input type="hidden" name="flag" value="0">
    <input type="checkbox" name="flag" value="0"
    <?php
    if(!empty($_GET["flag"])){
        echo "checked";}
    ?>>
    <input type="checkbox" name="flag" value="0"
    <?php
    if(!empty($_GET["flag"])){
        echo "checked";}
    ?>>
    <input type="submit">
</form>
