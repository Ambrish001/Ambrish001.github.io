<?php
    require 'common.php';
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $pwd = mysqli_real_escape_string($con, $_POST['password']);
    $password = MD5($pwd);
    
    $q2 = "SELECT id, email, password FROM users WHERE email='$email'" ;
    $result = mysqli_query($con, $q2)or die(mysqli_error($con));
    $row= mysqli_fetch_array($result);
    
    if (strcmp($password, $row['password'])!=0) {
    header('location: wrong.php');
    } else {  
    $_SESSION['email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location: home.php');
  }
?>