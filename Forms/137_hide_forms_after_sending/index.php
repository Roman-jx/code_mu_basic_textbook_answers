// Task 1
<form action="" method="get">
    Your city: <input type="text" name="city" value="
    <?php
    if (isset($_GET["city"])){
        echo $_GET["city"];
    }
    ?>
    ">
    Your country: <input type="text" name="country" value="
    <?php
    if (isset($_GET["country"])){
        echo $_GET["country"];
    }
    ?>
    ">
    <input type="submit">
</form>

// Task 2
<form action="" method="get">
    Your year: <input type="number" name="year" value="
    <?php
    if (isset($_GET["year"])){
        if (($_GET["year"] % 4 == 0 && $_GET["year"] % 400 == 0) && $_GET["year"] % 100 == 0){
            echo $_GET["year"];
        }
    } else {
        echo "default";
    }
    ?>
    ">
    <input type="submit">
</form>