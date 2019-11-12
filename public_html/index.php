<?php require 'common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: products.php'); 
    
    }
?>
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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <?php include 'header.php';?>
    <br><br>
        <div class="content">
            <div class="banner-image">
                <div class="container">
                    <center>
                    <div class="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <a href="products.php">
                            <input  class="btn btn-danger btn-lg active" type="button" name="Shop now" value="Shop now">
                        </a>
                    </div>
                </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="items">
                <a href="#" >                         
                    <img src="img/camera.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Cameras</h2>                             
                        <p>Choose among the best available in the world.</p>                         
                    </div>                     
                </a>
            </div>
            <div class="items">
                <a href="#" >                         
                    <img src="img/watch.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Watches</h2>                             
                        <p>Original Watches from the best brands.</p>                         
                    </div>                     
                </a>
            </div>
            <div class="items">
                <a href="#" >                         
                    <img src="img/shirt.jpg" alt="" class="thumbnail">                         
                    <div class="caption">                             
                        <h2>Shirts</h2>                             
                        <p>Our Exquisite collection of shirts.</p>                         
                    </div>                     
                </a>
            </div>
        </div
        <br><br><br>
        <?php include 'footer.php';?>
        
    </body>
</html>
