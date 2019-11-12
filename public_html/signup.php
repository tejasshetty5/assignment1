<?php include 'common.php';
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
            <form action="signup_script.php" method="post">
            
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
            <label for="email">E-Mail Address:</label>
            <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" name="contact" required minlength="10" maxlength="10">
            </div>
            <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" name="city" required>
            </div>
            <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" required>
            </div>    
            <button type="submit" name="signup" class="btn btn-default">Submit</button>
            </form>
        </div>
        <br><br><br>
        <?php include 'footer.php';?>
    </body>
</html>
