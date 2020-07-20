<?php
    require 'common.php';
    if (isset($_SESSION['email'])){
        header('location : home.php');
    }
?>

<html>
    <head>
        <title> Signup | E-Store </title>
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
                    <div class="col-xs-6">
                        <div class="thumbnail">
                        <img src="image/best-5g-phones.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" 
                                       required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                <?php echo $_GET['m1'] ;?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                       required pattern=".{6,}">                                
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10"
                                       size="10" name="contact" required>
                                <?php echo $_GET['m2'];?>
                            </div> 
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city"
                                        required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address"
                                        required >
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>