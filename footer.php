<html>
    <head>
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
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <footer>
        <div class="container foot">
            <div class="row">
                <div class="container-fluid">
                <div class="col-xs-4">
                    <h3> Information </h3>
                </div>
                <div class="col-xs-4">
                    <h3> My Account </h3>
                </div>
                <div class="col-xs-4">
                    <h3> Contact Us </h3>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                <div class="col-xs-4">
                    <a href="about.php"> About Us </a> 
                </div>
                <div class="col-xs-4">
                    <a data-toggle="modal" href="#myModal">
                        Login </a>
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
                                                    <input type="email" class="form-control" id="email" placeholder="Enter E-mail">
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                    <input type="text" class="form-control" id="password" placeholder="Enter password">
                                                  </div> 
                                            <button type="submit" name="Login" class="btn btn-primary">Login</button><br><br>                                            
                                        </form><br/>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#"> Forgot Password ? </a>
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
                </div>
                <div class="col-xs-4">
                    Contact : +91-123-000000
                </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                <div class="col-xs-4">
                    <a href="contact.php"> Contact Us</a>
                </div>
                <div class="col-xs-4">
                    <a href="signup.php?m1=&m2="> Signup </a>
                </div>
                <div class="col-xs-4"></div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>
