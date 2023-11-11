<?php
include("conn.php");
if(isset($_GET['id']))
{
    $Q="SELECT * FROM `users` WHERE `id`='$_GET[id]'";
    $D=mysqli_query($con,$Q);
    $DATA=mysqli_fetch_assoc($D);
}
if($DATA['Status']=='active')
{
    $q="UPDATE `users` SET `Status`='block' WHERE `id`='$_GET[id]'";
    $d=mysqli_query($con,$q);
    header('location:viewusers.php');
}


else
{
    $q="UPDATE  `users` SET `Status`='active' WHERE `id`='$_GET[id]'";
    $d=mysqli_query($con,$q);
    header('location:viewusers.php');
}
?>