<?php
include("./conn.php");
if(isset($_GET['id']))
{
    $q="DELETE FROM `products` WHERE `id`='$_GET[id]'";
    mysqli_query($con,$q);
    echo"<script>alert('data deleted');</script>";
    header("refresh:1,viewproducts.php");
}
else
{
    header("location:viewproducts.php");
}
?>