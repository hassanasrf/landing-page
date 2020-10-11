<!-- BEGIN HEADER HERE -->
  <?php include 'partials/header.php'; ?>
<!-- END HEADER HERE --> 

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    REGISTER A NEW ACCOUNT
                </div>
                <p>Sign up for a user account to start buying or selling bitcoins. <style>p{color: #fff;</style></p>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form name="register_form" id="register_form" method="post" action="act_register.php">
                            <div class="form-group">
                                <label class="form-control-label">FULLNAME</label>
                                <input type="text" name="fullname" id="fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Country</label>
                                <input type="text" name="country" id="country" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">EMAIL</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">REGISTER HERE</button>
                            </form>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <a href="index.php" class="reg-b"><span>LocalBitcoins?</span><br><u>CANCEL</u></a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>


<!-- BEGIN FOOTER HERE -->
  <?php include 'partials/footer.php'; ?>
<!-- END FOOTER HERE --> 