<?php

      require("config/dbc.php");

  $active = $_POST['active'];
  $start = $_POST['start'];
  $end = $_POST['end'];
  $buysell = $_POST['buysell'];
  $minamt = $_POST['minamt'];
  $maxamt = $_POST['maxamt'];
  $totalamt = $_POST['totalamt'];
  $country = $_POST['country'];
  $currency = $_POST['currency'];
  $payment_methods = $_POST['payment_methods'];
  $price = $_POST['price'];
  $pymt_time = $_POST['pymt_time'];
  $publicad = $_POST['publicad'];
  $privatead = $_POST['privatead'];
    $userid = $_SESSION['member_id'];
  


  $query = mysqli_query($connection, "INSERT INTO 
  ads(
    userid,
    active, 
    start, 
    end, 
    buysell, 
    minamt, 
    maxamt, 
    totalamt, 
    country, 
    currency, 
    payment_methods, 
    price, 
    pymt_time, 
    publicad, 
    privatead
  ) 
  VALUES(
      '$userid',
      '$active', 
      '$start', 
      '$end', 
      '$buysell', 
      '$minamt', 
      '$maxamt', 
      '$totalamt', 
      '$country', 
      '$currency', 
      '$payment_methods', 
      '$price', 
      '$pymt_time', 
      '$publicad', 
      '$privatead'
  )") or die(mysqli_error($connection));

   if(mysqli_num_rows($query) > 0 )
  {
    $row = mysqli_fetch_array($query);
    $_SESSION['IsValid'] = true;
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['payment_methods'] = $row['payment_methods'];
    $_SESSION['price'] = $row['price'];
    $_SESSION['minamt'] = $row['minamt'];
    $_SESSION['maxamt'] = $row['maxamt'];
    $_SESSION['buysell'] = $row['buysell'];

    header("Location:index.php");
  }
  else
  { 
   header("Location:add_record.php");
  }

?>