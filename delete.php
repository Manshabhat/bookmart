<?php
include("adminn/conn.php");
session_start();
if(isset($_GET['pid']))
{
   
    $q = "DELETE FROM `cart` WHERE `id`='$_GET[pid]' and `User_email`='$_SESSION[user]'";
    mysqli_query($con, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,cart.php");
}
else{
    header("location:cart.php");
}


if(isset($_GET['empty_cart']))
{
    
    $qq = "DELETE FROM `cart` WHERE `User_email`='$_SESSION[user]'";
    mysqli_query($con, $qq);
    echo "<script>alert('cart empty');</script>";
    header("refresh:1,cart.php");
}
?>