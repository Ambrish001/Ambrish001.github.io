<?php
require 'common.php';
?>

<html>
    <head>
        <title> Contact Us | E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="container content">
                <div class="col-sm-9">
                    <h3> LIVE SUPPORT </h3>
                    <h6> 24 Hours | 7 Days a Week | 365 Days a Year Live Technical Support</h6>
                    <p> It is a long established fact that a reader will be distracted by the 
                        readable content of a page when looking at its layout. The point of using
                        Lorem lpsum is that it has a more-or-less normal distribution of letters.
                        There are many variations of passages of Lorem lpsum available,
                        but the majority have suffered alternation in some form, by injected humour, or 
                        randomised words which don't look even slightly believable.
                        If you are going to use a passage of Lorem lpsum, you need to be sure there isn't anything
                        embarrassing hidden in the middle of text.</p>
                </div>
                <div class="col-sm-3">
                    <div class="thumbnail">
                        <img src='image/user_headset.png' alt="USER">
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container content">
                <div class="col-sm-8">
                    <h3> CONTACT US </h3>
                    <form action="contact_script.php" method="POST">
                        <div class="form-group">
                        Name:<br>
                        <input type="text" name="name" class="form-control"><br><br>
                        </div>
                        <div class="form-group">
                        Email:<br> 
                        <input type="email" name="email" class="form-control"><br><br>
                        </div>
                        <div class="form-group">
                        Message:<br>
                        <textarea name="message" rows="10" cols="30" class="form-control">
                            
                        </textarea><br><br>
                        </div>
                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="col-sm-4">
                    <h3> Company Information :  </h3>
                    Street : 14/A , 3rd Stage, Kathriguppe Main Road<br>
                    B.S.K. City : Bangalore , PIN: 530068<br>
                    India<br>
                    Phone : (+91) 123 000 0000<br>
                    E-Mail : info@mycompany.com<br>
                    Follow Us On: Facebook , Instagram , Twitter
                </div>
            </div>
            </div>
        </div>
        
        <?php 
        include 'footer.php';
        ?>
    </body>
</html>