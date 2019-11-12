<?php include 'common.php';

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
    <body>
        <?php include 'header.php';?>
        <br><br><br><br>
        <div class="container">
            <form action="">
            <div class="form-group">
            <label for="pwd">Old Password:</label>
            <input type="password" class="form-control" id="oldpwd">
            </div>
            <div class="form-group">
            <label for="pwd">New Password:</label>
            <input type="password" class="form-control" id="newpwd">
            </div>
            <div class="form-group">
            <label for="pwd">Re-Enter New Password:</label>
            <input type="password" class="form-control" id="rnewpwd">
            </div>    
            <button type="button" class="btn btn-default">Change</button>
            </form>
        </div>
        <br><br><br>
        <?php include 'footer.php';?>
    </body>
</html>
