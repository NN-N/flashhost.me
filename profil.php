<?php
require_once "files/config.php";
$title = "Profil | ".$config['shortname'];
require_once "files/header.php"
?>

<!-- content -->

        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper" style="padding:1rem">
                <link href="https://cekmutasi.co.id/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
                <link href="https://cekmutasi.co.id/assets/pages/advance-elements/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">

                  <div class="card">
                    <div class="card-header">
                      <h5>Daftar Tagihan</h5>
                      <span>Menampilkan 1 - 3 dari 3 data</span>
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
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th style="min-width:80px;white-space: nowrap">ID</th>
                              <th style="">Lokasi</th>
                              <th style="white-space: nowrap">Paket</th>
                              <th style="white-space: nowrap">Domain</th>
                              <th style="white-space: nowrap">Kedaluarsa</th>
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
                                  <input type="text" class="form-control form-control-sm" name="search[domain]" value="" style="max-width:150px">
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                  <select name="search[status]" class="form-control form-control-sm" style="max-width: 90px;">
                                    <option value="all"> Semua </option>
                                    <option value="3"> Paid </option>
                                    <option value="2"> Unpaid </option>
                                    <option value="1"> Expired </option>
                                  </select>
                                </td>
                              </form>
                              <td>
                                <button onclick="document.search_form.submit();" type="submit" class="btn btn-info btn-bordered btn-sm"><i class="fas fa-search"></i> Cari</button>
                              </td>
                            </tr>

                            <tr>
                              <td scope="row">00003</td>
                              <td style="word-wrap: break-word">smkngmb.net</td>
                              <td style="word-wrap: break-word">SG (Asia)</td>
                              <td style="word-wrap: break-word">Gold</td>
                              <td style="word-wrap: break-word;">11/05/2018 12:12</td>
                              <td><label class='label label-lg label-success'style='text-align: center;width: 90px!important'>Paid</label></td>
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
                                <label class="label label-lg label-inverse" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer">Detail <span class="fas fa-caret-down"></span></label>
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
                              <td scope="row">00002</td>
                              <td style="word-wrap: break-word">jeritankubur.com</td>
                              <td style="word-wrap: break-word">UK (Eropa)</td>
                              <td style="word-wrap: break-word">Silver</td>
                              <td style="word-wrap: break-word;">28/12/2018 23:01</td>
                              <td><label class='label label-lg label-info' style='text-align: center;width: 90px!important'>Unpaid</label></td>
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
                                <label class="label label-lg label-inverse" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer">Detail <span class="fas fa-caret-down"></span></label>
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
                              <td scope="row">00001</td>
                              <td style="word-wrap: break-word">huruf.xyz</td>
                              <td style="word-wrap: break-word">US (Amerika)</td>
                              <td style="word-wrap: break-word">Bronze</td>
                              <td style="word-wrap: break-word;">02/07/2018 09:10</td>
                              <td><label class='label label-lg label-danger' style='text-align: center;width: 90px!important'>Expired</label></td>
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
                                  <label class="label label-lg label-inverse" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer">Detail <span class="fas fa-caret-down"></span></label>
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
