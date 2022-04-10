// Task 1
<?php
session_start();
if (!empty($_GET)){
    $_SESSION["info"] = $_GET;
}
?>
<li>
    <?php
    foreach ($_SESSION["info"] as $inf){
    ?>
    <ul><?= $inf;}?></ul>
</li>