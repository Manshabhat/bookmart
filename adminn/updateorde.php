<?php
include("./conn.php");
session_start();
if (isset($_SESSION['admin'])) {
    if (isset($_GET['pid'])) {


        $q = "UPDATE `cart` SET `status`='confirm' WHERE `id`='$_GET[pid]'";
        $d = mysqli_query($con, $q);
        header("location:order.php");

    }
}
?>