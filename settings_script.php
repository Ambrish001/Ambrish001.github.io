<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$op = mysqli_real_escape_string($con, $_POST['oldpassword']);
$old_pass = MD5($op);

$np = mysqli_real_escape_string($con, $_POST['newpassword']);
$new_pass = MD5($np);

$rep = mysqli_real_escape_string($con, $_POST['repassword']);
$retype_pass = MD5($rep);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if (strcmp($new_pass, $retype_pass)!=0) {
    header('location: settings.php?err=The two passwords don\'t match');
} else {
    if (strcmp($old_pass,$orig_pass)==0) {
        $query = "UPDATE users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?err=Password Updated');
    } else
        header('location: settings.php?err=Wrong Old Password');
}
?>