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
    </head>
    <body>
        <?php include 'header.php';?>
        <br><br><br>
        <div class="container">
        <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Number</th>
        <th>Item Name</th>
        <th>Price</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Total</td>
        <td>Rs.0</td>
        <td><a href="success.php" class="btn btn-primary btn-block">Confirm Order</a></td>
      </tr>
    </tbody>
  </table>
    </div>
        <br><br><br>
        <?php include 'footer.php';?>
    </body>
</html>
