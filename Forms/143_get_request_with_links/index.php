// Task 1
<a href="index.php?num=1">1</a>
<a href="index.php?num=2">2</a>
<a href="index.php?num=3">3</a>

// Task 2
<?php
for ($i=1; $i<=10; $i++){
?>
<a href="index.php?num=<?php $i;?>"><?php $i;?></a>
<?php
}
?>

// Task 3
<?php
$arr = ["a", "b", "c", "d", "e"];
$count = 1;
foreach ($arr as $a){
?>
<a href="index.php?<?php echo $a;?>=<?php echo $count++;?>"></a>
<?php
}
?>