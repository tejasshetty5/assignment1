<?php
// Start the session
session_start();

$servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "store";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);
    // Check connection
?>