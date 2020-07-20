<?php
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<html>
    <head>
        <title> Success | E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
        include 'header.php';  
        ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="container content">
                    <div class="col-xs-6 col-xs-offset-3">
                        <center>
                            Thank You for ordering from E-Store. The order shall be delivered<br>
                            to you shortly.<br><br><br>
                            Order some more items <a href="home.php"> here. </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        $final_id=$_GET['itemsid'];  
        $user_id=$_SESSION['user_id'];
        $q10="Update user_items set status='Confirmed' where user_id='$user_id' and item_id IN (". $final_id .") and status='Added to cart'";
        $r10= mysqli_query($con, $q10) or die(mysqli_error($con));
        include 'footer.php';
        ?>
    </body>
</html>