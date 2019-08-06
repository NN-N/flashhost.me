<?php
session_start();
  require_once "files/config.php";
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Configuration</title>
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <script src="files/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="files/fonts/css/all.css">
    <link rel="stylesheet" type="text/css" href="files/styles/styles-dashboard-css.css">
    <link rel="stylesheet" type="text/css" href="files/styles/styles-dashboard.css">
    <link rel="stylesheet" type="text/css" href="files/styles/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="files/styles/custom.css">

    <style type="text/css">
      @media only screen and (max-width: 768px){
                  .imgdash{
                    margin-top: 15px
                  }
      }

      a.norder:hover{
        text-decoration: underline!important;
      }

    </style>
    <script>
      $(document).ready(function(){
        var fpkt = $('#package').val();
        if(fpkt == 'Gold'){
          $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 12.000/month) </option><option value="y"> Annually (IDR 100.000/year)</option>');
        }else if (fpkt == 'Silver') {
          $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 9.000/month) </option><option value="y"> Annually (IDR 90.000/year)</option>');
        }else if(fpkt == 'Bronze'){
          $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 4.000/month) </option><option value="y"> Annually (IDR 40.000/year)</option>');
        }
        $('#package').bind('change', function(){
          var pkt = $(this).val();
          if(pkt == 'Gold'){
            $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 12.000/month) </option><option value="y"> Annually (IDR 100.000/year)</option>');
          }else if (pkt == 'Silver') {
            $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 9.000/month) </option><option value="y"> Annually (IDR 90.000/year)</option>');
          }else if(pkt == 'Bronze'){
            $('#cycle').html('<option value="" disabled selected> --Select Billing Cycle-- </option><option value="m"> Monthly (IDR 4.000/month) </option><option value="y"> Annually (IDR 40.000/year)</option>');
          }
        });
        $('#domain').bind('change', function(){
          var domain = $(this).val();
          $('#pdomain').html(domain);
        });
        $('#lokasi').bind('change', function(){
          var lok = $(this).val();
          var paket =  $('#package').val();
          if(lok == 'SG'){
            $('#ptype').html('SG - '+paket);
          }else if (lok == 'US') {
            $('#ptype').html('US - '+paket);
          }else if(lok == 'UK'){
            $('#ptype').html('UK - '+paket);
          }
        });
        $('#payment').bind('change', function(){
          var srv = $('#package').val();
          var bill = $('#cycle').val();
          if (srv == 'Gold' && bill == 'm') {
            $('#pprice').html('IDR 12.000,-');
          }else if (srv == 'Gold' && bill == 'y') {
            $('#pprice').html('IDR 100.000,-');
          }else if (srv == 'Silver' && bill == 'm') {
            $('#pprice').html('IDR 9.000,-');
          }else if (srv == 'Silver' && bill == 'y') {
            $('#pprice').html('IDR 90.000,-');
          }else if (srv == 'Bronze' && bill == 'm') {
            $('#pprice').html('IDR 4.000,-');
          }else if (srv == 'Bronze' && bill == 'y') {
            $('#pprice').html('IDR 40.000,-');
          }
        });
      });
    </script>
  </head>
  <body>

    <div class="theme-loader">
      <div class="ball-scale">
        <div class='contain'>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
          <div class="ring">
            <div class="frame"></div>
          </div>
        </div>
      </div>
    </div>

    <div id="pcoded" class="pcoded">
      <div class="pcoded-overlay-box"></div>
      <div class="pcoded-container navbar-wrapper">
        <nav class="navbar header-navbar pcoded-header">
          <div class="navbar-wrapper">
            <div class="navbar-logo">
              <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="fas fa-bars"></i>
              </a>
              <a class="mobile-search morphsearch-search" href="#">
                <i class="ti-search"></i>
              </a>
              <a href="<?=$config['url'];?>" class="imgdash">
                <img class="img-fluid" src="img/logo.png" alt="<?=$config['sitename'];?>" />
              </a>
              <a class="mobile-options" style="cursor:pointer">
                <i class="fas fa-ellipsis-h"></i>
              </a>
            </div>
            <div class="navbar-container container-fluid">
              <ul class="nav-left">
                <li>
                  <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="fas fa-bars"></i></a></div>
                </li>
                <li>
                  <a class="main-search morphsearch-search" href="#">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav-right">
                <li class="user-profile header-notification">
                  <a href="">
                    <img src="<?=$config['url'];?>/img/male.png" class="img-radius" alt="User-Profile-Image">
                    <span>Akun Saya</span>
                    <i class="fas fa-chevron-down"></i>
                  </a>
                  <ul class="show-notification profile-notification">
                    <li>
                      <a href="<?=$config['url'];?>/setting.php">
                        <i class="fas fa-cog"></i> Pengaturan
                      </a>
                    </li>
                    <li>
                      <a href="<?=$config['url'];?>/logout.php">
                        <i class="fas fa-power-off"></i> Keluar
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

  <!-- content -->

              <?php
              if (isset($_POST['checkout'])) {
                $reqdomain = mysqli_real_escape_string($db, trim($_POST['domain']));
                $reqpkt = mysqli_real_escape_string($db, trim($_POST['package']));
                $reqcycle =  mysqli_real_escape_string($db, trim($_POST['cycle']));
                $reqlok = trim($_POST['lokasi']);
                $reqpayment = trim($_POST['payment']);
                $reqemail = $_SESSION['usermail'];
                $reqname = $_SESSION['username'];
                if ($reqpkt == 'Gold' && $reqcycle == 'm') {
                  $nom = '12000';
                }else if ($reqpkt == 'Gold' && $reqcycle == 'y') {
                  $nom = '100000';
                }else if ($reqpkt == 'Silver' && $reqcycle == 'm') {
                  $nom = '9000';
                }else if ($reqpkt == 'Silver' && $reqcycle == 'y') {
                  $nom = '90000';
                }else if ($reqpkt == 'Bronze' && $reqcycle == 'm') {
                  $nom = '4000';
                }else if ($reqpkt == 'Bronze' && $reqcycle == 'y') {
                  $nom = '40000';
                }
                $n = 0;
                do{
                	$rand = rand(1,100);
                	$nominal = $nom + $rand;
                	$sql_ceknominal = mysqli_query($db, "SELECT id FROM tb_invoice WHERE nominal = '".$nominal."' && status = '3'");
                	$n++;
                }while($sql_ceknominal->num_rows != 0);
                $sql_cekdomain = mysqli_query($db, "SELECT cp_id FROM tb_cpanel WHERE cp_domain = '".$reqdomain."'");
                $exp = date('d-m-Y H:i', (time()+(12*60*60))); // expired at
                $sql_createinv = "INSERT INTO tb_invoice(id, time, paket, lokasi, cycle, domain, nominal, gateway, status, exp, user_email, user_name, valid_at, valid_by)
                                  VALUES(NULL, '$timenow', '$reqpkt', '$reqlok', '$reqcycle', '$reqdomain', '$nominal', '$reqpayment', '3', '$exp', '$reqemail', '$reqname', NULL, NULL)";
                $db->query($sql_createinv);
                $sql_cekidinv = mysqli_query($db, "SELECT * FROM tb_invoice WHERE nominal = '".$nominal."' && status = 3");
                if ($sql_cekidinv->num_rows == 1) {
                  while ($inv = $sql_cekidinv->fetch_assoc()) {
                    $idinvoice = $inv['id'];
                  }
                }
                $urli = "invoice.php?id=".$idinvoice;
              ?>
                <script>
                window.location.href = "<?=$urli;?>";
                </script>
              <?php
                //header('Location : $urli');
              }
              ?>
              <div class="page-wrapper" style="padding:1rem">
                <div class="page-body" style="margin-top:80px;">
                  <div class="row">
                      <div class="col-sm-6">
                        <div class="card col-12">
                          <div class="card-header">
                            <h5>Configure Order</h5>
                            <div class="card-header-right">
                            </div>
                          </div>
                          <div class="card-block">
                            <form action="" method="POST" style="width: 100%!important">
                              <div class="form-group">
                                  <label>Domain :</label>
                                  <input type="text" name="domain" maxlength="50" placeholder="Ex : domain.com" class="form-control input-lg" id="domain" required>
                                </div>
                              <div class="form-group">
                                <label>Package :</label>
                                <select class="form-control form-control-sm col-12 col-md-6 col-lg-6" name="package" id="package" required>
                                  <option value="" disabled> --Select Package-- </option>
                                  <option value="Gold" <?=isset($_POST['Gold']) ? 'selected' : ''; ?>> Gold </option>
                                  <option value="Silver" <?=isset($_POST['Silver']) ? 'selected' : ''; ?>> Silver </option>
                                  <option value="Bronze" <?=isset($_POST['Bronze']) ? 'selected' : ''; ?>> Bronze </option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Billing Cycle :</label>
                                <select class="form-control form-control-sm col-12 col-md-6 col-lg-6" name="cycle" id="cycle" required>
                                  <option value="" disabled selected> --Select Billing Cycle-- </option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Server Location :</label>
                                <select class="form-control form-control-sm col-12 col-md-6 col-lg-6" name="lokasi" id="lokasi" required>
                                  <option value="" disabled selected> --Select Server Location-- </option>
                                  <option value="SG"> SG (Asia) </option>
                                  <option value="US"> US (America) </option>
                                  <option value="UK"> UK (Europe)</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Payment Method :</label>
                                <select class="form-control form-control-sm col-12 col-md-6 col-lg-6" name="payment" id="payment" required>
                                  <option value="" disabled selected> --Select Payment Method-- </option>
                                  <option value="1"> Bank BRI </option>
                                  <option value="2"> Bank BCA </option>
                                  <option value="3" disabled> PayPal </option>
                                  <option value="4" disabled> PerfectMoney </option>
                                  <option value="5" disabled> Pulsa Telkomsel </option>
                                </select>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="card col-12">
                          <div class="card-header">
                            <h5>Order Summary</h5>
                            <div class="card-header-right">
                            </div>
                          </div>
                          <div class="card-block">
                            <?php
                            if (isset($_SESSION['userid'])){
                            ?>
                            <div class="form-group">
                                  <label>Billing Name :</label>
                                  <input type="text" name="fullname" maxlength="50" value="<?=$_SESSION['username'];?>" disabled class="form-control input-lg">
                              </div>
                              <div class="form-group">
                                  <label>Billing Email :</label>
                                  <input type="text" name="email" maxlength="50" value="<?=$_SESSION['usermail'];?>" disabled class="form-control input-lg">
                              </div>
                            <?php
                            }else{
                              echo "
                              <div class='form-group'>
                                <label>You must <a class='norder' href='".$config['url']."/login.php' style='font-size:14px;color:#4680ff'>Login</a> before order. If you don't have registered account, you must <a class='norder' href='".$config['url']."/register.php' style='font-size:14px;color:#4680ff'>Register</a> first.
                              </div>
                              ";
                            }
                            ?>
                              <div class="form-group">
                                <label>Domain : <b id="pdomain">-</b></label>
                              </div>
                              <div class="form-group">
                                <label>Type : <b id="ptype">-</b></label>
                              </div>
                              <div class="form-group">
                                <label>Price : <b id="pprice">IDR/USD<b></label>
                              </div>
                              <button type="submit" name="checkout" class="btn btn-round btn-sm btn-primary waves-effect waves-light f-right" <?=isset($_SESSION['userid']) ? '' : 'disabled';?>>
                                <i class="fas fa-shopping-cart"></i>Checkout
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>

              <div id="styleSelector"></div>
<!-- end of content-->

      </div>
    </div>
  </div>

  <script src="files/js/jquery.js"></script>
  <script type="text/javascript" src="files/material/jquery-ui.min.js"></script>
  <script type="text/javascript" src="files/material/popper.min.js"></script>
  <script type="text/javascript" src="files/material/bootstrap.min.js"></script>

  <script type="text/javascript" src="files/material/jquery.slimscroll.js"></script>

  <script type="text/javascript" src="files/material/modernizr.js"></script>

  <script type="text/javascript" src="files/material/pnotify.js"></script>
  <script type="text/javascript" src="files/material/pnotify.desktop.js"></script>
  <script type="text/javascript" src="files/material/pnotify.buttons.js"></script>
  <script type="text/javascript" src="files/material/pnotify.confirm.js"></script>
  <script type="text/javascript" src="files/material/pnotify.callbacks.js"></script>
  <script type="text/javascript" src="files/material/pnotify.animate.js"></script>
  <script type="text/javascript" src="files/material/pnotify.history.js"></script>
  <script type="text/javascript" src="files/material/pnotify.mobile.js"></script>
  <script type="text/javascript" src="files/material/pnotify.nonblock.js"></script>

  <script type="text/javascript" src="files/material/i18next.min.js"></script>
  <script type="text/javascript" src="files/material/i18nextXHRBackend.min.js"></script>
  <script type="text/javascript" src="files/material/i18nextBrowserLanguageDetector.min.js"></script>
  <script type="text/javascript" src="files/material/jquery-i18next.min.js"></script>

  <script type="text/javascript" src="files/material/SmoothScroll.js"></script>
  <script src="files/material/pcoded.min.js"></script>
  <script src="files/material/demo-12.js"></script>
  <script src="files/material/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="files/material/script.min.js"></script>
  <script type="text/javascript" src="files/material/date.format.js"></script>
  <script type="text/javascript" src="files/material/numberformat.js"></script>

</body>
</html>
