<?php include 'common.php';

if($_POST)
{
	$username  = $_POST['email'];
	$password = $_POST['password'];
	$sql="select * from users where email='$username' and password='$password'";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res) > 0)
	{
		while($row=mysqli_fetch_assoc($res))
		{
			
			$_SESSION['user_id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        header ('location:products.php');
			
			
		}
	}
	else
	
		
                echo "<script type='text/javascript'>alert('invalid email or password');</script>";
                header ('location:signup.php');
                
                
	
	
}    
?>
  