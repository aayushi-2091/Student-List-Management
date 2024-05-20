<?php 
include '_dbconnect.php';
$sno=$_GET['no'];
$sql="DELETE FROM student WHERE `student`.`Sno` = $sno ";
$result=mysqli_query($connection,$sql);
header("location:/CRUD_PHP/index.php?show=1");
?>