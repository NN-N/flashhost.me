<?php
require_once "files/config.php";
$title = "Semua Layanan | ".$config['shortname'];
?> 

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
            <a href="<?=$config['url'];?>/dashboard.php" class="imgdash">
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
                    <a href="">
                      <i class="fas fa-cog"></i> Pengaturan
                    </a>
                  </li>
                  <li>
                    <a href="">
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
                    <span>Rizqi Aldi Prayugo (CM0050)</span>
                    <span id="more-details">Member<i class="fas fa-chevron-down"></i></span>
                  </div>
                </div>
                <div class="main-menu-content">
                  <ul>
                    <li class="more-details">
                      <a href=""><i class="fas fa-cog"></i>Pengaturan</a>
                      <a href=""><i class="fas fa-power-off"></i>Keluar</a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="active">
                  <a href="dashboard.php">
                    <span class="pcoded-micon"><i class="fas fa-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="services.php">
                    <span class="pcoded-micon"><i class="fas fa-cubes"></i><b>P</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.packages.main">Semua Layanan</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="">
                    <span class="pcoded-micon"><i class="fas fa-money-bill"></i><b>S</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.balance.main">Saldo Akun</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="">
                    <span class="pcoded-micon"><i class="fas fa-database"></i><b>L</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.subscription.main">Invoice</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="">
                    <span class="pcoded-micon"><i class="fas fa-code-branch"></i><b>I</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.integration.main">Integrasi</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                <li class="">
                  <a href="">
                    <span class="pcoded-micon"><i class="fas fa-comments"></i></i><b>T</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.testimonial.main">Testimonial</span>
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </li>
              <li class="">
                <a href="">
                  <span class="pcoded-micon"><i class="far fa-life-ring"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.cs.docs">Ticket Support</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
              <li class="">
                <a href="">
                  <span class="pcoded-micon"><i class="fas fa-code"></i><b>I</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.cs.api">Integrasi RESTful API</span>
                  <span class="pcoded-mcaret"></span>
                </a>
              </li>
            </ul>
            <div style="height: 20px;"></div>
          </div>
        </nav>

<!-- content -->

        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper" style="padding:1rem">
                <link href="https://cekmutasi.co.id/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
                <link href="https://cekmutasi.co.id/assets/pages/advance-elements/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
                <div class="card total-request-card">
                  <div class="card-block">
                    <div class="row" style="margin-bottom:20px">
                      <div class="col-xs-12 col-sm-6">
                        <select id="bank_id" class="form-control">
                          <option value="all"> Semua Akun </option>
                          <option value="292"> BRI - test123 (192912381737123) </option><option value="291"> BCA - adasda (123112221) </option> </select>
                        </div>
                        <div class="col-xs-12 col-sm-6 personal-profile">
                          <div class="row">
                            <div class="col-xs-12 col-md-10 text-center">
                              <div class="input-daterange input-group" id="datepicker">
                                <input data-toggle="tooltip" data-placemenet="top" title="Tanggal awal" type="text" class="input-sm form-control" id="start-datepicker-autoclose" value="09/12/2018">
                                <span class="input-group-addon" style="background:#62d1f3">to</span>
                                <input data-toggle="tooltip" data-placemenet="top" title="Tanggal akhir" type="text" class="input-sm form-control" id="end-datepicker-autoclose" value="09/12/2018">
                              </div>
                            </div>
                            <div class="col-xs-12 col-md-2 text-center">
                              <button onclick="updateStats();" type="submit" class="btn btn-info btn-bordered btn-sm"><span class="fas fa-sync-alt"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6 b-r-default">
                          <h3 class="f-30" id="stat-total-mutation">0</h3>
                          <h6 class="text-muted p-b-20 f-w-400">Total Mutasi</h6>
                          <div class="progress">
                            <div class="progress-bar bg-c-green" style="width:50%">
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 personal-profile">
                          <div class="row">
                            <div class="col-xs-12 col-md-6 text-center">
                              <h4 id="stat-credit">Rp 0</h4>
                              <h6 class="text-muted f-w-400">Transaksi Masuk</h6>
                              <hr>
                              <p class="text-muted f-w-400 m-b-0"></p>
                            </div>
                            <div class="col-xs-12 col-md-6 text-center">
                              <h4 id="stat-debit">Rp 0</h4>
                              <h6 class="text-muted f-w-400">Transaksi Keluar</h6>
                              <hr>
                              <p class="text-muted f-w-400 m-b-0"></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header">
                      <h5>Daftar Rekening Bank</h5>
                      <span>Menampilkan 1 - 2 dari 2 data</span>
                      <div class="card-header-right">
                        <form action="?&sort=DESC&page=1" method="POST" style="float:right">
                          <label><select name="per_page" class="form-control form-control-sm" onchange="this.form.submit()">
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select></label>
                        </form>
                      </div>
                    </div>
                    <div class="card-block table-border-style">
                      <div class="button-panel" style="padding: 0px 20px 10px 20px;float:left">
                        <button onclick="javascript:window.location.assign('https://cekmutasi.co.id/app/bank/add');" type="button" class="btn btn-primary btn-bordered btn-mini"><i class="icofont icofont-plus-circle"></i> Tambah</button> <button onclick="generateXLSX();" type="button" class="btn btn-primary btn-bordered btn-mini"><i class="icofont icofont-spreadsheet"></i> Download Excel</button>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th style="min-width:80px;white-space: nowrap">ID</th>
                              <th style="">Service</th>
                              <th style="white-space: nowrap">Username</th>
                              <th style="white-space: nowrap">No. Rekening</th>
                              <th style="white-space: nowrap">Saldo</th>
                              <th style="white-space: nowrap">Paket</th>
                              <th style="white-space: nowrap">Status</th>
                              <th style="white-space: nowrap"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr style="background:#e9ecef">
                              <form action="https://cekmutasi.co.id/app/bank" method="GET" name="search_form" id="search_form">
                                <input type="hidden" name="sort" value="DESC">
                                <td>
                                  <input type="text" class="form-control form-control-sm" name="search[id]" value="" style="max-width:70px">
                                </td>
                                <td>
                                  <select name="search[service_id]" class="form-control form-control-sm">
                                    <option value="all"> Semua </option>
                                    <option value="1"> BCA </option><option value="2"> BRI </option>
                                  </select>
                                </td>
                                <td>
                                  <input type="text" class="form-control form-control-sm" name="search[username]" value="">
                                </td>
                                <td>
                                  <input type="text" class="form-control form-control-sm" name="search[account_number]" value="">
                                </td>
                                <td>
                                </td>
                                <td>
                                  <select name="search[package_id]" class="form-control form-control-sm">
                                    <option value="all"> Semua </option>
                                    <option value="1"> Basic </option>
                                  </select>
                                </td>
                                <td>
                                  <select name="search[status]" class="form-control form-control-sm">
                                    <option value="all"> Semua </option>
                                    <option value="ACTIVE"> Aktif </option>
                                    <option value="INACTIVE"> Tidak Aktif </option>
                                  </select>
                                </td>
                              </form>
                              <td>
                                <button onclick="document.search_form.submit();" type="submit" class="btn btn-info btn-bordered btn-sm"><i class="mdi mdi-magnify"></i> Cari</button> <button onclick="javascript:window.location.assign('https://cekmutasi.co.id/app/bank?per_page=10');" type="submit" class="btn btn-info btn-bordered btn-sm"><i class="mdi mdi-magnify"></i> Reset</button>
                              </td>
                            </tr>
                            <tr>
                              <td scope="row">292</td>
                              <td style="word-wrap: break-word"><b>BRI</b></td>
                              <td style="word-wrap: break-word">test123</td>
                              <td style="word-wrap: break-word">192912381737123</td>
                              <td style="word-wrap: break-word;font-weight:bold">0,00</td>
                              <td style="font-weight:bold">Basic</td>
                              <td><label class='label label-lg label-success'>Aktif</label></td>
                              <td>
                                <form action="https://cekmutasi.co.id/app/bank?&sort=DESC&page=1&per_page=10" name="change_status_292" id="change_status_292" method="POST">
                                  <input type="hidden" name="csrf_token" value="8c760251d9d25c4af4759c8c35762c8d8ab021a6015583d73367e5ff4a9e22ee">
                                  <input type="hidden" name="change_status" value="292">
                                  <input type="hidden" name="current_status" value="ACTIVE">
                                </form>
                                <form action="https://cekmutasi.co.id/app/bank?&sort=DESC&page=1&per_page=10" name="delete_item_292" id="delete_item_292" method="POST">
                                  <input type="hidden" name="csrf_token" value="8c760251d9d25c4af4759c8c35762c8d8ab021a6015583d73367e5ff4a9e22ee">
                                  <input type="hidden" name="delete_item" value="292">
                                </form>
                                <div class="dropdown-primary dropdown open">
                                <label class="label label-lg label-inverse" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer">Opsi <i class="icofont icofont-caret-down"></i></label>
                                  <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(-112px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item waves-light waves-effect" href="#" onclick="document.change_status_292.submit();">Nonaktifkan</a>
                                    <a class="dropdown-item waves-light waves-effect" href="https://cekmutasi.co.id/app/bank/edit/292">Edit</a>
                                    <a class="dropdown-item waves-light waves-effect" data-toggle="modal" data-target="#mutationmodal" href="#" onclick="latestMutation(292);">5 Mutasi Terbaru</a>
                                    <a class="dropdown-item waves-light waves-effect" href="https://cekmutasi.co.id/app/mutation/bank/Mjky">Lihat Semua Mutasi</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item waves-light waves-effect" href="#" id="delete-item" data-item-id="292">Hapus</a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td scope="row">291</td>
                                <td style="word-wrap: break-word"><b>BCA</b></td>
                                <td style="word-wrap: break-word">adasda</td>
                                <td style="word-wrap: break-word">123112221</td>
                                <td style="word-wrap: break-word;font-weight:bold">0,00</td>
                                <td style="font-weight:bold">Basic</td>
                                <td><label class='label label-lg label-success'>Aktif</label></td>
                                <td>
                                  <form action="https://cekmutasi.co.id/app/bank?&sort=DESC&page=1&per_page=10" name="change_status_291" id="change_status_291" method="POST">
                                    <input type="hidden" name="csrf_token" value="8c760251d9d25c4af4759c8c35762c8d8ab021a6015583d73367e5ff4a9e22ee">
                                    <input type="hidden" name="change_status" value="291">
                                    <input type="hidden" name="current_status" value="ACTIVE">
                                  </form>
                                  <form action="https://cekmutasi.co.id/app/bank?&sort=DESC&page=1&per_page=10" name="delete_item_291" id="delete_item_291" method="POST">
                                    <input type="hidden" name="csrf_token" value="8c760251d9d25c4af4759c8c35762c8d8ab021a6015583d73367e5ff4a9e22ee">
                                    <input type="hidden" name="delete_item" value="291">
                                  </form>
                                  <div class="dropdown-primary dropdown open">
                                    <label class="label label-lg label-inverse" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer">Opsi <i class="icofont icofont-caret-down"></i></label>
                                    <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut" x-placement="bottom-start" style="position: absolute; transform: translate3d(-112px, 21px, 0px); top: 0px; left: 0px; will-change: transform;">
                                      <a class="dropdown-item waves-light waves-effect" href="#" onclick="document.change_status_291.submit();">Nonaktifkan</a>
                                      <a class="dropdown-item waves-light waves-effect" href="https://cekmutasi.co.id/app/bank/edit/291">Edit</a>
                                      <a class="dropdown-item waves-light waves-effect" data-toggle="modal" data-target="#mutationmodal" href="#" onclick="latestMutation(291);">5 Mutasi Terbaru</a>
                                      <a class="dropdown-item waves-light waves-effect" href="https://cekmutasi.co.id/app/mutation/bank/Mjkx">Lihat Semua Mutasi</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item waves-light waves-effect" href="#" id="delete-item" data-item-id="291">Hapus</a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr style="background:#e9ecef"><td colspan="6" style="text-align:right;white-space: nowrap;font-size:16px">Total Saldo :</td><td colspan="2" style="text-align:center;white-space: nowrap;font-weight:bold;font-size:16px;">Rp 0,00</td></td> </tbody>
                            </table>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <ul class="pagination justify-content-center m-t-20 m-b-20">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Prev</a></li>
                            <li class="page-item active">
                              <a class="page-link" href="https://cekmutasi.co.id/app/bank?&sort=DESC&page=1&per_page=10">1 <span class='sr-only'>(current)</span></a>
                            </li>
                            <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="mutationmodal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document" style="max-width:1024px">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Memuat...</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearMutationModal();"><span aria-hidden="true">×</span></button>
                          </div>
                          <div class="modal-body">
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th style="min-width:70px;white-space: nowrap">Bank</th>
                                  <th style="min-width:100px;white-space: nowrap">Tanggal</th>
                                  <th style="">Keterangan</th>
                                  <th style="min-width:110px;white-space: nowrap">Tipe</th>
                                  <th style="min-width:130px;white-space: nowrap">Jumlah</th>
                                  <th style="min-width:130px;white-space: nowrap">Saldo</th>
                                </tr>
                              </thead>
                              <tbody id="mutation-body">
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="styleSelector"></div>
              </div>
            </div>
          </div>

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
