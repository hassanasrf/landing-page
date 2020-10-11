<?php 
      require("config/dbc.php");

  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($connection, "SELECT * FROM member WHERE email='$email' AND password='$password'");

  if(mysqli_num_rows($result) > 0 )
  {
  	$row = mysqli_fetch_array($result);
  	$_SESSION['IsValid'] = true;
  	$_SESSION['fullname'] = $row['fullname'];
  	$_SESSION['email'] = $row['email'];
  	$_SESSION['member_id'] = $row['member_id'];

  	header("Location:add_record.php");
  }
  else
  {	
  	header("Location:login.php");
  }
?>
