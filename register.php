<?php
if (isset($_SESSION['userid'])) {
  header('Location: dashboard.php');
}else{
  require_once "files/config.php";
  $title = 'Register |'.$config['shortname'];
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
                    <span>Register to FlashHost.ME</span>
                  </p>
                  <div>
                    <?php
                    if (isset($_POST['register'])) {
                      $curl = curl_init();
                      curl_setopt_array($curl, [
                        CURLOPT_RETURNTRANSFER => 1,
                        CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
                        CURLOPT_POST           => 1,
                        CURLOPT_POSTFIELDS     => [
                          'secret'    => $config['recaptcha-secret'],
                          'response'  => $_POST['g-recaptcha-response'],
                        ],
                      ]);
                      $response = json_decode(curl_exec($curl));

                      if ($response->success) {
                        $reg_email = mysqli_real_escape_string($db, trim($_POST['email']));
                        $reg_name = mysqli_real_escape_string($db, trim($_POST['name']));
                        $reg_phone = mysqli_real_escape_string($db, trim($_POST['phone']));
                        $reg_pwd = trim($_POST['pwd']);
                        $reg_repwd = trim($_POST['repwd']);
                        if ($reg_pwd != $reg_repwd) {
                          echo '
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="far fa-times-circle"></i>
                              </button>
                              <strong>Your password is not same!</strong>
                              <p>Please refill the password by corectly.</p>
                            </div>
                          ';
                        }else if (filter_var($reg_email, FILTER_VALIDATE_EMAIL)) {
                          $sql_cekmail = mysqli_query($db, 'SELECT * FROM tb_akun WHERE email = "'.$reg_email.'"');
                          $sql_cekphone = mysqli_query($db, 'SELECT * FROM tb_akun WHERE phone = "'.$reg_phone.'"');
                          if ($sql_cekmail->num_rows != 0) {
                            // if email was registered
                            echo '
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="far fa-times-circle"></i>
                              </button>
                              <strong>Account already registered!</strong>
                              <p>Your email address has been registered.</p>
                            </div>
                            ';
                          }else if ($sql_cekphone->num_rows != 0) {
                            // if phone was registered
                            echo '
                            <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="far fa-times-circle"></i>
                              </button>
                              <strong>Account already registered!</strong>
                              <p>Your phone number has been registered.</p>
                            </div>
                            ';
                          }else{
                            $reg_pwd = md5($reg_pwd);
                            // continue...
                            do{
                              $codestr = "012345678901234567890123456789";
                              $kode = "";
                              for ($i=0; $i < 6; $i++) {
                                $rand = rand(0, strlen($codestr)-1);
                                $kode .= $codestr{$rand};
                                $sql_cek_kode = mysqli_query($db, 'SELECT * FROM tb_akun WHERE code = "'.$kode.'"');
                              }
                            }while ($sql_cek_kode->num_rows != 0);
                            $unicode = md5(uniqid(rand()));
                            $sql_adduser = "INSERT INTO tb_akun(id_user, access, email, phone, name, pwd, reg_time, last_log, code, log_try, note)
                                            VALUES(NULL, '3', '$reg_email', '$reg_phone', '$reg_name', '$reg_pwd', '$timenow', NULL, '$kode', NULL, NULL)";
                            if ($db->query($sql_adduser) === TRUE) {
                              // registration Successfully
                              echo '
                                <div class="alert alert-success">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="far fa-times-circle"></i>
                                  </button>
                                  <strong>Registration Successfully!</strong>
                                  <p>Please check your inbox of your email for account verification.</p>
                                </div>
                              ';
                            }else {
                              // registration failure
                              echo '
                                <div class="alert alert-danger">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="far fa-times-circle"></i>
                                  </button>
                                  <strong>Registration Failed!</strong>
                                  <p>Please contact the Administrator.</p>
                                </div>
                              ';
                            }
                            unset($reg_email);
                            unset($reg_name);
                            unset($reg_phone);
                            unset($reg_pwd);
                            unset($reg_repwd);
                          }
                        }else{
                          // if email is invalid
                          echo '
                          <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="far fa-times-circle"></i>
                            </button>
                            <strong>Your email is invalid!</strong>
                            <p>Please check the email address you entered.</p>
                          </div>
                          ';
                        }
                      }else {
                        echo '
                          <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="far fa-times-circle"></i>
                            </button>
                            <strong>Register Error!</strong>
                            <p>Please comfirm you are not robot by ceklist the reCaptcha.</p>
                          </div>
                        ';
                      }
                    }
                    ?>
                    <form method="POST" role="form">
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="email" name="email" required="required" value="<?=@$_POST['email'];?>" placeholder="Email Address" class="form-control input-lg">
                      </div><!--
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="text" name="user" placeholder="Username" class="form-control input-lg">
                      </div>-->
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="text" name="name" required="required" value="<?=@$_POST['name'];?>" placeholder="Full Name" class="form-control input-lg">
                      </div>
                        <div class="form-group">
                          <label class="control-label"> </label>
                          <input type="text" name="phone" required="required" value="<?=@$_POST['phone'];?>" placeholder="Phone (with country code, ex: 62xxx)" class="form-control input-lg">
                        </div>
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="password" name="pwd" required="required" minlength="8" maxlength="20" placeholder="Password" class="form-control input-lg">
                      </div>
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="password" name="repwd" required="required" minlength="8" maxlength="20" placeholder="Retype Password" class="form-control input-lg">
                      </div>
                      <div class="form-group" style="overflow: hidden;">
                        <center>
                          <div class="g-recaptcha" data-sitekey="<?=$config['recaptcha-key'];?>"></div>
                        </center>
                      </div>
                      <div class="form-group pull-left">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" required="required" name="tos"> By clicking the register button below, I have read and agree to the FlashHost's <a href="" title="Terms of Services">Terms of Service</a>.
                          </label>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <button type="submit" class="btn btn-success btn-block" name="register">
                        <span data-v-6e9ae9fe=""><span data-v-6e9ae9fe="">Register</span></span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="link">
                <ul class="list-unstyled">
                  <li>Already registered?
                    <a href="<?=$config['url'];?>/login.php" class="">Login here.</a>
                  </li>
                  <li>Lost your verification link?
                    <a href="<?=$config['url'];?>/resend-verification.php" class="">Resend Email Verificaton</a>
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
