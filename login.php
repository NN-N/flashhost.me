<?php
session_start();
if (isset($_SESSION['userid'])) {
  header('Location: dashboard.php');
}else{
  require_once "files/config.php";
  $title = 'Login |'.$config['shortname'];
  require_once "files/head.php";
?>
<div id="app">
  <!--<div class="__cov-progress" style="background-color: rgb(143, 255, 199); opacity: 0; top: 0px; left: 0px; width: 0%; height: 4px; transition: width 0.2s ease 0s, opacity 0.6s ease 0s;"></div>-->
    <section class="rc-guest">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="rc-login">
            <div class="container">
              <div class="box box-default"  style="margin-top: 15px">
                <div class="box-heading">
                  <center>
                    <a href="<?=$config['url'];?>">
                      <img src="<?=$config['logo-grey'];?>" alt="FlashHost.ME Logo" class="img-responsive">
                    </a>
                  </center>
                </div>
                <div class="box-body">
                  <p class="divider">
                    <span>Login to Dashboard</span>
                  </p>
                  <div>
                    <?php
                    if (isset($_POST['signin'])) {
                      $log_email = mysqli_real_escape_string($db, trim($_POST['email']));
                      $log_pwd = $_POST['password'];
                      $sql_cekuser = mysqli_query($db, 'SELECT * FROM tb_akun WHERE email = "'.$log_email.'"');
                      if ($sql_cekuser->num_rows == 1) {
                        $log_pwd = md5($log_pwd);
                        while ($log = $sql_cekuser->fetch_assoc()){
                            if ($log['pwd'] == $log_pwd) {
                              if ($log['access'] == 1) {
                                echo '
                                <div class="alert alert-warning">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="far fa-times-circle"></i>
                                  </button>
                                  <strong>Sorry!</strong>
                                  <p>Your account was blocked temporary. Please contact Administrator to reactivate your account.</p>
                                </div>
                                ';
                              }else{
                                $_SESSION['userid'] = $log['id_user'];
                                $_SESSION['usermail'] = $log['email'];
                                $_SESSION['useracc'] = $log['access'];
                                $_SESSION['username'] = $log['name'];
                                header('Location: dashboard.php');
                              }
                            }else {
                              echo '
                              <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <i class="far fa-times-circle"></i>
                                </button>
                                <strong>Login Failed!</strong>
                                <p>Your password is incorrect. If you enter a wrong password 5 times in a row, your account will be blocked temporary.</p>
                              </div>
                              ';
                            }
                          }
                      }else {
                        echo '
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="far fa-times-circle"></i>
                          </button>
                          <strong>Login Failed!</strong>
                          <p>Your email address does not registered.</p>
                        </div>
                        ';
                      }
                    }
                    ?>
                    <form method="POST" action="">
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="email" name="email" placeholder="Email" class="form-control input-lg">
                      </div>
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="password" name="password" minlength="8" maxlength="20" placeholder="Password" class="form-control input-lg">
                      </div>
                      <a href="<?=$config['url'];?>/reset-password.php" class="pull-right">Forgot password?</a>
                      <div class="clearfix"></div>
                      <button type="submit" class="btn btn-success btn-block" name="signin">
                        <span data-v-6e9ae9fe=""><span data-v-6e9ae9fe="">Sign in</span></span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="link">
                <ul class="list-unstyled">
                  <li>Don't have an account?
                    <a href="<?=$config['url'];?>/register.php" class="">Register</a>
                  </li>
                  <li>Lost your verification link?
                    <a href="<?=$config['url'];?>/resend-verification.php" class="">Resend Email Verification</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php
}
?>
