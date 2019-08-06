<?php
session_start();
if (isset($_SESSION['userid'])){
  require_once "files/config.php";
  $title = "Bantuan | ".$config['shortname'];
  require_once "files/header.php"
?>

<!-- content -->

      <?php
      if (isset($_GET['ticket'])) {
        if ($_GET['ticket'] == 'new') {
      ?>
          <!--new ticket-->
          <div class="pcoded-content">
            <div class="pcoded-inner-content">
              <div class="main-body">
                <div class="page-wrapper" style="padding:1rem">

                  <div class="alert alert-success background-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="far fa-times-circle"></i>
                    </button>
                    <strong>INFORMASI:</strong>
                    <p>Tiket bantuan terkirim dengan id 00002</p>
                  </div>

                  <div class="page-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5>Butuh bantuan ?</h5>
                            <div class="card-header-right">
                            </div>
                          </div>
                          <div class="card-block">
                            <form action="" method="POST" enctype="multipart/form-data" id="editor" name="editor">
                              <input type="hidden" name="csrf_token" value="6957c464b8b3bbcd8b12ae0ba3be6e19b7b7d2ed705f1cf70c1e70beac4926b1"> <input type="hidden" name="insert" value="1">
                              <div class="form-group">
                                <label>Subject :</label>
                                <input type="text" name="subject" class="form-control form-control-sm col-12 col-md-6 col-lg-6">
                              </div>
                              <div class="form-group">
                                <label>Pesan (max 500 karakter) :</label>
                                <textarea rows="5" class="form-control form-control-sm col-12 col-md-12 col-lg-6" name="content"></textarea>
                              </div>
                            </form>
                            <button onclick="document.editor.submit();" type="button" class="btn btn-round btn-sm btn-primary waves-effect waves-light f-right">
                              <i class="icofont icofont-save"></i> Simpan
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div id="styleSelector"></div>
              </div>
            </div>
          </div>
          <!--end of new ticket-->
      <?php
        }else {
      ?>
          <!-- view ticket -->

          <!-- end of view ticket -->
      <?php
        }
      }else {
      ?>
        <!-- all ticket -->
        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper" style="padding:1rem">
                <link href="https://cekmutasi.co.id/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
                <link href="https://cekmutasi.co.id/assets/pages/advance-elements/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">

                  <div class="card">
                    <div class="card-header">
                      <h5>Menu Bantuan</h5>
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
                      <div class="button-panel" style="padding: 0px 20px 10px 20px;float:left">
                        <a href="<?=$config['url'];?>/support.php?ticket=new">
                          <button type="button" class="btn btn-primary btn-bordered btn-mini waves-effect" data-toggle="modal"><i class="fas fa-plus-square"></i> Tiket baru</button>
                        </a>
                      </div>
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th style="min-width:80px;white-space: nowrap">ID</th>
                              <th style="">Subject</th>
                              <th style="white-space: nowrap">Diperbarui</th>
                              <th style="white-space: nowrap">Status</th>
                              <th style="white-space: nowrap"></th>
                            </tr>
                          </thead>
                          <tbody>

                            <tr>
                              <td scope="row">00003</td>
                              <td style="word-wrap: break-word">Butuh bantuan 1</td>
                              <td style="word-wrap: break-word">11/05/2018 22:11</td>
                              <td><label class='label label-lg label-success'style='text-align: center;width: 90px!important'>Open</label></td>
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
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td scope="row">00002</td>
                              <td style="word-wrap: break-word">Domain tidak bisa diakses melalui jaringan wan mbah</td>
                              <td style="word-wrap: break-word">11/05/2018 22:11</td>
                              <td><label class='label label-lg label-success'style='text-align: center;width: 90px!important'>Closed</label></td>
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
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td scope="row">00001</td>
                              <td style="word-wrap: break-word">Butuh bantuan .....</td>
                              <td style="word-wrap: break-word">11/05/2018 22:11</td>
                              <td><label class='label label-lg label-danger'style='text-align: center;width: 90px!important'>Closed</label></td>
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
          <!-- end of all ticket -->
          <?php
          }
          ?>

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
<?php
}else{
  //header('Location: index.php');
}
?>
