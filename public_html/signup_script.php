<?php include 'common.php';


// initializing variables
$name = "";
$password = "";
$email    = "";
$contact = "";
$address = "";
$city = "";
$errors = array(); 

// connect to the database


// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);

 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name, email, password, contact, city, address) 
  			  VALUES('$name', '$email', '$password1', '$contact', '$city', '$address')";
  	mysqli_query($conn, $query);
        $id=mysqli_insert_id(conn);
        $_SESSION['user_id'] = $id;
  	$_SESSION["email"] = "email";
  	
  	header('location: products.php');
  }
}
?>