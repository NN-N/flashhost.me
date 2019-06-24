<!DOCTYPE html>
<html lang="id">
<head>
  <title><?=$title;?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="noindex, nofollow" /> <meta name="description" content="">
  <meta name="keywords" content="<?=$config['key'];?>">
  <meta name="author" content="<?=$config['shortname'];?>">
  <meta name="csrf-token" content="43c8bbd284bfbb8f6c49fa9485293ae88f5dd0fb0a17ed8b3387d1a16307a93c">

  <link rel="icon" href="<?=$config['url'];?>/img/favicon-32x32.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>/files/fonts/css/all.css">
  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>/files/styles/styles-dashboard-css.css">
  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>/files/styles/styles-dashboard.css">
  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>/files/styles/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" type="text/css" href="<?=$config['url'];?>/files/styles/custom.css">

  <style type="text/css">
    @media only screen and (max-width: 768px){
                .imgdash{
                  margin-top: 15px
                }
    }
  </style>
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
      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
            <div class="pcoded-inner-navbar main-menu">
              <div class="">
                <div class="main-menu-header">
                  <img class="img-50 img-radius" src="img/person1.png" alt="Rizqi Aldi Prayugo">
                  <div class="user-details">
                    <span><?=$_SESSION['username'].' (FH'.$_SESSION['userid'].')';?></span>
                    <span id="more-details">
                      <?php
                        if ($_SESSION['useracc'] == 7) {
                          echo 'Administrator ';
                        }else {
                          echo 'User';
                        }
                      ?>
                      <i class="fas fa-chevron-down"></i></span>
                  </div>
                </div>
                <div class="main-menu-content">
                  <ul>
                    <li class="more-details">
                      <a href="<?=$config['url'];?>/setting.php"><i class="fas fa-cog"></i>Pengaturan</a>
                      <a href="<?=$config['url'];?>/logout.php"><i class="fas fa-power-off"></i>Keluar</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="<?=$config['url'];?>/dashboard.php">
                    <span class="pcoded-micon"><i class="fas fa-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="<?=$config['url'];?>/services.php">
                    <span class="pcoded-micon"><i class="fas fa-cubes"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.packages.main">Semua Layanan</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <!-- <li class="">
                  <a href="balance.php">
                    <span class="pcoded-micon"><i class="fas fa-money-bill"></i><b>S</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.balance.main">Saldo Akun</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li> -->
                <li class="">
                  <a href="<?=$config['url'];?>/invoice.php">
                    <span class="pcoded-micon"><i class="fas fa-database"></i><b>L</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.subscription.main">Tagihan</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="<?=$config['url'];?>/testimoni.php">
                    <span class="pcoded-micon"><i class="fas fa-comments"></i></i><b>T</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.testimonial.main">Testimoni</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </li>
              <li class="">
                <a href="<?=$config['url'];?>/support.php">
                  <span class="pcoded-micon"><i class="far fa-life-ring"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.cs.docs">Bantuan</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
            <div style="height: 20px;"></div>
          </div>
        </nav>
