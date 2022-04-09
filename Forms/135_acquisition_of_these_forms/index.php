// Task 1
<form action="" method="get">
    Your name: <input type="text" name="name">
    Your surname: <input type="text" name="surname">
    Your middlename: <input type="text" name="middlename">
    <input type="submit" >
</form>

<?php
if(!empty($_GET)){
    echo $_GET["name"]." ".$_GET["surname"]." ".$_GET["middlename"];
}

?>