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
                    LOGIN HERE
                </div>
                <p>Log in user account to start buying or selling bitcoins. <style>p{color: #fff;</style></p>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form name="login_form" id="login_form" method="post" action="act_login.php">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
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
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </form>
                                <div class="col-lg-6 login-btm login-button">
                                    <a href="register.php" class="reg"><span>New to LocalBitcoins?</span><br><u>Sign up now!<u></a>
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