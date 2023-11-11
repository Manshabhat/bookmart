<?php
session_start();
unset($_SESSION['creator']);
session_destroy();
header("location:login.php");



?>