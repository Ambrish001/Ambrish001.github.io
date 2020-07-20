<?php
    session_start();
if (!isset($_SESSION['email'])) {
    header('location: signup.php?m1=&m2=');
}
session_destroy();
header('location: index.php');
?>