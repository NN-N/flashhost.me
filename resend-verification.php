<?php
  require_once "files/config.php";
  $title = 'Reset Password |'.$config['shortname'];
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
                    <span>Resend Email Verification</span>
                  </p>
                  <div>
                    <form method="POST" role="form">
                      <div class="form-group">
                        <label class="control-label"> </label>
                        <input type="email" name="email" placeholder="Email" class="form-control input-lg">
                      </div>
                      <div class="clearfix"></div>
                      <button type="submit" class="btn btn-success btn-block">
                        <span data-v-6e9ae9fe=""><span data-v-6e9ae9fe="">Resen Email</span></span>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="link">
                <ul class="list-unstyled">
                  <li>Do you have verified your account?
                    <a href="<?=$config['url'];?>/login.php" class="">Login now</a>
                  </li>
                  <li>Not received email verification?
                    <a href="<?=$config['url'];?>#hubungi" class="">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
