<?php
include '_dbconnect.php';
if (!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST')
{
    $sno=$_POST["sn"];
    $name=$_POST["name"];
    $mail=$_POST["email"];
    $add=$_POST["address"];
    $ph=$_POST["phone"];
    $sql="UPDATE `student` SET `Name` = '$name', `Email` = '$mail', `Address` = '$add', `Phone Number` = '$ph' WHERE `student`.`Sno` = $sno";
    $result=mysqli_query($connection,$sql);
    header("location:/CRUD_PHP/index.php");
}
?>