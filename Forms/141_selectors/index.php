// Task 1
<form action="" method="get">
    <select name="country">
        <option>Ukraine</option>
        <option>UK</option>
        <option>USA</option>
    </select>
    <input type="submit">
</form>
<?php
if (isset($_GET["country"])){
    echo "Your country: ".$_GET["country"];
};
?>

// Task 2
<form action="" method="get">
    <select name="language">
        <option>English</option>
        <option>Ukraine</option>
        <option>Spanish</option>
    </select>
    <input type="submit">
</form>
<?php
if (isset($_GET["language"])){
    echo "Your language: ".$_GET["language"];
};
?>

// Task 3
// Task 2
<form action="" method="get">
    <select name="language">
        <option value="1" <?php if (!empty($_GET["language"]) and $_GET["language"] == "1"){ echo "selected"; }?>>English</option>
        <option value="2" <?php if (!empty($_GET["language"]) and $_GET["language"] == "2"){ echo "selected"; }?>>Ukraine</option>
        <option value="3" <?php if (!empty($_GET["language"]) and $_GET["language"] == "3"){ echo "selected"; }?>>Spanish</option>
    </select>
    <input type="submit">
</form>
<?php
if (isset($_GET["language"])){
    echo "Your language: ".$_GET["language"];
};
?>