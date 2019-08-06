<?php
session_start();
if (isset($_SESSION['userid'])){
  require_once "files/config.php";
  $title = "Semua Layanan | ".$config['shortname'];
  require_once "files/header.php";
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
                      <h5>Daftar Semua Layanan</h5>
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
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th style="min-width:80px;white-space: nowrap">ID</th>
                              <th style="">Lokasi</th>
                              <th style="white-space: nowrap">Paket</th>
                              <th style="white-space: nowrap">Domain</th>
                              <th style="white-space: nowrap">Username</th>
                              <th style="white-space: nowrap">Aktif Sampai</th>
                              <th style="white-space: nowrap">Status</th>
                              <th style="white-space: nowrap"></th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                              $sql_ceksrv = mysqli_query($db, 'SELECT * FROM tb_cpanel WHERE cp_by ="'.$_SESSION['usermail'].'"');
                              if ($sql_ceksrv->num_rows != 0) {
                                while ($srv = $sql_ceksrv->fetch_assoc()) {
                            ?>
                                  <tr>
                                    <td scope="row"><?=$srv['cp_id'];?></td>
                                    <td style="word-wrap: break-word">
                                      <?php
                                        if ($srv['cp_server'] == 'US') {
                                          echo 'US (Amerika)';
                                          $urlcp = "https://us.flashhost.me:2083";
                                        }else if ($srv['cp_server'] == 'SG') {
                                          echo 'SG (Asia)';
                                          $urlcp = "https://sg.flashhost.me:2083";
                                        }else if ($srv['cp_server'] == 'UK'){
                                          echo 'UK (Eropa)';
                                          $urlcp = "https://uk.flashhost.me:2083";
                                        }
                                      ?>
                                    </td>
                                    <td style="word-wrap: break-word"><?=$srv['cp_pkt'];?></td>
                                    <td style="word-wrap: break-word"><?=$srv['cp_domain'];?></td>
                                    <td style="word-wrap: break-word"><?=$srv['cp_user'];?></td>
                                    <td style="word-wrap: break-word;"><?=$srv['cp_exp'];?> UTC+7</td>
                                    <td>
                                      <?php
                                        if ($srv['cp_status'] == 5) {
                                          echo "<label class='label label-lg label-success'style='text-align: center;width: 115px!important'>Aktif</label>";
                                        }else if ($srv['cp_status'] == 1) {
                                          echo "<label class='label label-lg label-danger' style='text-align: center;width: 115px!important'>Terblokir</label>";
                                        }else {
                                          echo "<label class='label label-lg label-warning' style='text-align: center;width: 115px!important'>Nonaktif</label>";
                                        }
                                      ?>
                                    </td>
                                    <td>
                                      <a href="<?=$urlcp;?>" target="_blank">
                                      <label class="label label-lg label-inverse" style="cursor:pointer">Access <span class="fas fa-caret-down"></span></label>
                                      </a>
                                    </td>
                                  </tr>
                            <?php
                                }
                              }else {
                                echo '
                                <tr>
                                  <td colspan="8">
                                    <center>Tidak Ada Data</center>
                                  </td>
                                </tr>
                                ';
                              }
                            ?>

                            </table>
                          </div>
                        </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <ul class="pagination justify-content-center m-t-20 m-b-20">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Prev</a></li>
                            <li class="page-item active">
                              <a class="page-link" href="">1 <span class='sr-only'>(current)</span></a>
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
<?php
}else{
  //header('Location: index.php');
}
?>
