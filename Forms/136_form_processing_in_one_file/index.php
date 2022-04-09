// Task 1
<?php
if (empty($_GET)){
?>
<form action="" method="get">
    Your name: <input type="text" name="name">
    <input type="submit">
</form>
<?php
}else{
    echo $_GET["name"] . ", hello!";
}
?>