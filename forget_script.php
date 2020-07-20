<?php
    require 'common.php';
    $email=$_POST['email'];
    $query="SELECT * from users where email='$email'";
    $res= mysqli_query($con, $query) or die(mysqli_error($con));
    $rows= mysqli_num_rows($res);
    if($rows==0){
        $m='This E-Mail ID is not Registered';
        header('location:forget.php?msg='.$m);
    }else{
        $m='A Mail containing your new password is sent on your E-Mail ID';
        header('location:forget.php?msg='.$m);
    }
    ?>