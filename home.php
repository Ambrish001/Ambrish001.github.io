<?php
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Welcome | E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        
        <div class="container-fluid content">
            <div class="row">
                <div class="container" >
                    <div class="col-sm-4" >
                    <div class="panel panel-default" >
                        <div class="panel-heading text-center">
                            Apple Iphone 11 Pro Max
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">                                
                                <img src="image/iphone.jpg" alt="Apple Iphone 11 Pro Max" height="300" class="img-responsive">
                            <div class="caption">
                                <p>6.5 inches, 1242*2688px, A13 Bionic hexa-core processor
                                4GB RAM, 512GB inbuilt, 12MP+12MP+12MP rear & 12MP front camera, Rs.115000/-</p>
                                <a href="cart-add.php?id=1" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Motorola Edge Plus
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="image/motorola.jpg" alt="Motorola Edge Plus" height="300" class="img-responsive">
                            <div class="caption">
                                <p>6.7 inches,1080*2340 px, Snapdragon 865 octa-core processor
                                12 GB RAM, 256 GB inbuilt, 108MP rear and 25MP front camera, Rs.74999/-</p>
                                <a href="cart-add.php?id=2" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="col-sm-4" >
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            OnePlus 8 Pro
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="image/oneplus.jpg" alt="OnePlus 8 Pro" height="300" class="img-responsive">
                            <div class="caption">
                                <p> 6.78 inches, 1440*3168px, Snapdragon 865 Octa Core processor
                                12 GB RAM, 256 GB inbuilt, 48MP rear & 16MP front camera, Rs.59999/-</p>
                                <a href="cart-add.php?id=3" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>    
                
                </div>    
            </div>
            
            <div class="row">
                <div class="container">
                
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Samsung Galaxy S20 Ultra
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img src="image/samsung.jpg" alt="Samsung Galaxy S20 Ultra" height="300" class="img-responsive">
                            <div class="caption">
                                <p>6.9 inches,1440*3200 px, Exynos 990 octa-core processor
                                12 GB RAM,128GB Inbuilt, 108MP rear & 40MP front camera, Rs.97999/- </p>
                                <a href="cart-add.php?id=4" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center" >
                            Xiaomi Mi Note 10 Pro
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">                                
                                <img src="image/xiaomi.jpg" alt="Xiaomi Mi Note 10 Pro" height="300" class="img-responsive">
                            <div class="caption">
                                <p>6.47 inches, 1080*2340px, Snapdragon 730 octa-core processor
                                8GB RAM, 256GB inbuilt, 108MP rear & 32MP front camera, Rs.40000/-</p>
                                <a href="cart-add.php?id=5" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                
                
                    <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Asus 6Z
                        </div>
                        <div class="panel-body">
                            <div class="thumbnail">                                
                                <img src="image/asus2.jpg" alt="Asus 6Z" height="300" class="img-responsive">
                            <div class="caption">
                                <p>6.4 inches, 1080*2340 px, Snapdragon 855 octa-core processor
                                8GB RAM, 256GB inbuilt, 48MP rear & 13MP front camera, Rs.34999/-</p>
                                <a href="cart-add.php?id=6" class="btn btn-primary btn-block"> Add to Cart</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>     
                
            </div> 
            </div>    
        </div>
        
    </body>
</html>
