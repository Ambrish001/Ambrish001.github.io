<?php
    require 'common.php';
?>

<html>
    <head>
        <title> Forgot Password | E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Forgot Password
                        </div>
                        <div class="panel-body">
                            <form action="forget_script.php" method="POST">
                                <div class="form-group">
                                    E-Mail ID: <input type="email" name="email" placeholder="Enter your E-Mail ID">
                                </div>
                                <div class="form-group">
                                <input type="button" class="btn btn-default" value="Submit">
                                <?php echo $_GET['msg'];?>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            To Continue Shopping with us , <a href="index.php"> Click Here </a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>