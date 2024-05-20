<?php
include '_dbconnect.php';
if (!empty($_POST) && $_SERVER['REQUEST_METHOD']=='POST')
{
    $name=$_POST["name"];
    $mail=$_POST["email"];
    $add=$_POST["address"];
    $ph=$_POST["phone"];
    $sql="INSERT INTO `student` (`Name`, `Email`, `Address`, `Phone Number`) VALUES ('$name', '$mail', '$add', '$ph')";
    $result=mysqli_query($connection,$sql);
    header("location:/CRUD_PHP/index.php?show=1");
}
?>