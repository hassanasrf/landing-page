<!-- BEGIN HEADER HERE -->
<?php session_start(); ?>
<?php if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:login.php');
    exit;
}?> 
  <!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.8, https://mobirisethemes.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>LocalBitcoins</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/script.js"></script>
  
  
</head>
<body>
  <section class="menu1 menu cid-raTI2NFMfz" once="menu" id="menu1-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
      <div class="navbar-brand">
        <span class="navbar-caption-wrap mbr-section-btn"><a class="navbar-caption text-warning display-4" href="index.php">
        LocalBitcoins</a></span>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown mbr-section-btn" data-app-modern-menu="true">
          <li class="nav-item">
            <a class="nav-link link text-warning display-4" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link link text-warning display-4" href="register.php"><?php echo $_SESSION['fullname']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-warning display-4" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  
  <section class="mbr-section content3 cid-raTKYGOHjk" id="content3-4">
    <div class="container">
      <div class="media-container-row">
        <div class="title" style="width: 66%;">
          <h1 class="mbr-section-subtitle mbr-fonts-style align-center pb-3 display-4">Trade bitcoins person-to-person in an easy, fast, and secure way.</h1>

          <h2 class="mbr-section-title mbr-fonts-style align-center display-2">
          Buy and Sell Bitcoin Everywhere</h2>
        </div>
      </div>
    </div>
  </section>
<!-- END HEADER HERE --> 
 <!-- Content Wrapper. Contains page content -->
 <div class="container">
    <section class="content">
      <div class="h1">
        <h1>ADD RECORD</h1>
        </div>
      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
        <div class="box box-primary">
          <!-- /.box-header -->
          <div class="box-body">
            <!--  -->
            <!-- row start -->
            <div class="row-1"> 
              <div class="col-xs-6">
              <form name="add_form" id="add_form" method="post" action="act_add_record.php">
                <div class="form-group ">
                  <label-1 for="active">Active <span class="text text-red">*</span></label-1>
                  <input type="text" name="active" class="form-control" id="active" placeholder="Active">
                </div>

                <div class="form-group ">
                  <label-1 for="start">Start <span class="text text-red">*</span></label-1>
                  <input type="text" name="start" class="form-control" id="start" placeholder="Start">
                </div>

                <div class="form-group ">
                  <label-1 for="end">End <span class="text text-red">*</span></label-1>
                  <input type="text" name="end" class="form-control" id="end" placeholder="End">
                </div>

                <div class="form-group ">
                  <label-1 for="buysell">Buy-sell <span class="text text-red">*</span></label-1>
                  <input type="text" name="buysell" class="form-control" id="buysell" placeholder="Buy-sell">
                </div>                

                <div class="form-group ">
                  <label-1 for="minamt">Minimum Amount <span class="text text-red">*</span></label-1>
                  <input type="text" name="minamt" class="form-control" id="minamt" placeholder="Minimum Amount">
                </div>

                <div class="form-group ">
                  <label-1 for="maxamt">Maximum Amount <span class="text text-red">*</span></label-1>
                  <input type="text" name="maxamt" class="form-control" id="maxamt" placeholder="Maximum Amount">
                </div>

                <div class="form-group ">
                  <label-1 for="totalamt">Total Amount <span class="text text-red">*</span></label-1>
                  <input type="text" name="totalamt" class="form-control" id="totalamt" placeholder="Total Amount">
                </div>

                <div class="form-group">
                  <label-1>Country <span class="text text-red">*</span></label-1>
                  <select name="country" id="country" class="form-control select2" style="width: 100%;">
                    <option value="none">-- Select Country --</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                  </select>
                </div>

                <div class="form-group">
                  <label-1>Currency <span class="text text-red">*</span></label-1>
                  <select name="currency" id="currency" class="form-control select2" style="width: 100%;">
                    <option value="none">-- Select Currency --</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                  </select>
                </div>

                <div class="form-group">
                  <label-1>Payment Methods <span class="text text-red">*</span></label-1>
                  <select name="payment_methods" id="payment_methods" class="form-control select2" style="width: 100%;">
                    <option value="none">-- Select Payment Methods --</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                  </select>
                </div>

                <div class="form-group ">
                  <label-1 for="price">Price <span class="text text-red">*</span></label-1>
                  <input type="text" name="price" class="form-control" id="price" placeholder="Price">
                </div>

                <div class="form-group ">
                  <label-1 for="pymt_time">Payment Time <span class="text text-red">*</span></label-1>
                  <input type="text" name="pymt_time" class="form-control" id="pymt_time" placeholder="Payment Time">
                </div>

                <div class="form-group ">
                  <label-1 for="publicad">Public Ad <span class="text text-red">*</span></label-1>
                            <input type="text" name="publicad" class="form-control" id="publicad" placeholder="Public Ad">
                </div>

                <div class="form-group ">
                  <label-1 for="privatead">Private Ad <span class="text text-red">*</span></label-1>
                            <input type="text" name="privatead" class="form-control" id="privatead" placeholder="Private Ad">
                </div>

              </div>
            </div>
            <!-- row end -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
          </div>
      </div>
      <!-- /.box -->
      </form>
      <!-- form end -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
        <!-- /.content -->
    <!-- /.content-wrapper -->
<!-- BEGIN FOOTER HERE -->
  <?php include 'partials/footer.php'; ?>
<!-- END FOOTER HERE --> 