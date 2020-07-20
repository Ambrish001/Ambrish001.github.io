<html>    
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h5, .close {
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
    text-align: left;
  }
  </style>
    </head>
    <body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
             <?php
                    if(isset($_SESSION['email'])){
                    ?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> E-Store </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">                   
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart">
                        </span> Cart </a></li>
                    <li><a href="settings.php?err="><span class="glyphicon glyphicon-cog">
                        </span> Settings </a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in">
                        </span> Logout </a></li>   
                </ul> 
            </div>    
                    <?php
                    } else {
                    ?>
                    <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                        <a class="navbar-brand" href="index.php"> E-Store </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">               
                    <li><a href="signup.php?m1=&m2="><span class="glyphicon glyphicon-user">
                        </span> Sign Up</a></li>
                    <li><a data-toggle="modal" href="#myModal"><span class="glyphicon glyphicon-log-in">
                        </span> Login </a>
                        <div class="modal fade" id="myModal" data-backdrop="false" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">                                        
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h5> LOGIN </h5>
                                    </div>
                                    <div class="modal-body">
                                        Don't Have an Account ? <a href="signup.php?m1=&m2="> Register </a>
                                        <br><br>
                                        <form action="login_script.php" method="POST" role="form">
                                            <div class="form-group">
                                                    <label for="email"><span class="glyphicon glyphicon-user"></span> E-Mail ID</label>
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter E-mail">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter password">
                                                  </div> 
                                            <button type="submit" name="Login" class="btn btn-primary">Login</button><br><br>                                            
                                        </form><br/>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="forget.php?msg="> Forgot Password ? </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
                    </li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tasks">
                        </span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone">
                        </span> Contact Us </a></li>
                    </ul>
            </div>
                    <?php
                    }
                    ?>    
                
            </div>
    </div>
</body>
</html>