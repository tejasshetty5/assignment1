<?php include 'common.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php 
        include 'header.php';
        include 'Check-if-added.php'; 
        ?>
        <br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                    <a href="img/5.jpg">
                    <img src="img/5.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Cannon EOS</h2>                             
                        <p>Price: Rs.36000.00</p> 
                    </a>  
                        <?php
                         if (!isset($_SESSION['email'])) 
                             { 
                        ?>                                 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                             <?php                             
                         
                         } else {                                 
                                                          
                         if (check_if_added_to_cart(1)) { 
                         // //This is same as if(check_if_added_to_cart != 0)                                     
                         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                 
                         }
                         else {                                     
                             ?>                                     
                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                             <?php                                 
                         
                         }                             
                         
                         }                             
                         ?> 
                        
                    </div>
                                      
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/2.jpg">
                    <img src="img/2.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Nikon DSLR</h2>                             
                        <p>Price: Rs.40000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/3.jpg">
                    <img src="img/3.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Sony DSLR</h2>                             
                        <p>Price: Rs.50000.00</p> 
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/4.jpg">
                    <img src="img/4.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Olympus DSLR</h2>                             
                        <p>Price: Rs.80000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                    <a href="img/9.jpg">
                    <img src="img/9.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Titan Model #301</h2>                             
                        <p>Price: Rs.13000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/10.jpg">
                    <img src="img/10.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Titan Model #201</h2>                             
                        <p>Price: Rs.3000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/11.jpg">
                    <img src="img/11.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>HMT Milan</h2>                             
                        <p>Price: Rs.8000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/12.jpg">
                    <img src="img/12.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Faber Luba #111</h2>                             
                        <p>Price: Rs.18000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                    <a href="img/shirt.jpg">
                    <img src="img/shirt.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>H & W</h2>                             
                        <p>Price: Rs.800.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/6.jpg">
                    <img src="img/6.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Luis Phil</h2>                             
                        <p>Price: Rs.1000.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/13.jpg">
                    <img src="img/13.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>John Zok</h2>                             
                        <p>Price: Rs.1800.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <a href="img/14.jpg">
                    <img src="img/14.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Jhalsani</h2>                             
                        <p>Price: Rs.1300.00</p>
                    </a>
                        <button type="button" class="btn btn-primary btn-block">Add to Cart</button>
                    </div>                    
                    
                    </div>
                </div>

            
        </div>
        <br><br><br>
        <?php include 'footer.php';?>
    </body>
</html>
