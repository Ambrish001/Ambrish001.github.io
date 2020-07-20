<?php
    require 'common.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $q1="Insert into Contact(name,email,message) values('$name','$email','$message')";
    $r1= mysqli_query($con, $q1) or die(mysqli_error($con));
    header('location: contact.php');
?>    
