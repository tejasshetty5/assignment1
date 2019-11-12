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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php';?>
        <br><br><br><br>
        <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading"><p class="text-warning">Login to make a purchase</p></div>
            <div class="panel-body">
                <form action="login_submit.php" method="post">
                <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        <div class="panel-footer">Don't have an account? <a href="signup.php">Register</a></div>
        </div>
        </div>
        <br><br><br>
        <?php include 'footer.php';?>
    </body>
</html>
