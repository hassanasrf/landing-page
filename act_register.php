<?php 
      require("config/dbc.php");

  $fullname = $_POST['fullname'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $status = 'ACTIVE';
  $hash_key = uniqid(time());
  // $last_updated = date("d-m-Y h:i:s",time());


  $query = mysqli_query($connection, "INSERT INTO member(fullname, country, email, password, status, hash_key) VALUES('$fullname', '$country', '$email', '$password', '$status', '$hash_key')");

   header("Location:login.php");

?>