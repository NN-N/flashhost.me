<?php
session_start();
if (isset($_SESSION['userid'])){
  require_once "files/config.php";
  if (isset($_GET['id'])) {
    $title = "Invoice #".$_GET['id']." | ".$config['shortname'];
  }else {
    $title = "Invoices | ".$config['shortname'];
  }
  require_once "files/header.php";
?>
<!-- content -->

<div class="pcoded-content">
  <div class="pcoded-inner-content">
    <div class="main-body">
      <div class="page-wrapper" style="padding:1rem">
        <link href="https://cekmutasi.co.id/assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="https://cekmutasi.co.id/assets/pages/advance-elements/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">

        <?php
        if (isset($_GET['id'])) {
        ?>
        <div class="card">
          <div class="card-block table-border-style">
            <center>
              <div class="table-responsive">
                <table class="table table-striped hidden-phone" style="max-width: 700px; border-bottom: 1px solid #ddd">
                  <thead>
                    <?php
                    $sql_inv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE id = "'.$_GET['id'].'"');
                    if ($sql_inv->num_rows == 1) {
                      while ($in = $sql_inv->fetch_assoc()) {
                    ?>
                    <tr>
                      <th colspan="3"><center><u style="font-size: 18px">Detail Transaksi</u></center></th>
                    </tr>
                    <tr>
                      <th>ID Invoice</th>
                      <th> : </th>
                      <th><?=$in['id'];?></th>
                    </tr>
                  </thead>
                  <tbody id="history">
                    <tr>
                      <td>Created At</td>
                      <td> : </td>
                      <td><?=$in['time'];?> UTC+7</td>
                    </tr>
                    <tr>
                      <td>Expired On</td>
                      <td> : </td>
                      <td><?=$in['exp'];?> UTC+7</td>
                    </tr>
                    <tr>
                      <td>Domain</td>
                      <td> : </td>
                      <td><?=$in['domain'];?></td>
                    </tr>
                    <tr>
                      <td>Detail Paket</td>
                      <td> : </td>
                      <td><?=$in['paket'].' - '.$in['lokasi'];?></td>
                    </tr>
                    <tr>
                      <td>Nominal</td>
                      <td> : </td>
                      <td>IDR <?=number_format($in['nominal'], '0', ',', '.');?></td>
                    </tr>
                    <tr>
                      <td>Metode Pemabayaran</td>
                      <td> : </td>
                      <td>
                      <?php
                      if ($in['gateway'] == 1) {
                        echo "Bank BRI";
                      }else if ($in['gateway'] == 2) {
                        echo "Bank BCA";
                      }else if ($in['gateway'] == 3) {
                        echo "PayPal";
                      }else if ($in['gateway'] == 4) {
                        echo "Pulsa Telkomsel";
                      }
                      ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td> : </td>
                      <td>
                        <?php
                          if ($in['status'] == 5) {
                            echo "<label class='label label-lg label-success'style='text-align: center;width: 90px!important'>Paid</label>";
                          }else if ($in['status'] == 3) {
                            echo "<label class='label label-lg label-info' style='text-align: center;width: 90px!important'>Unpaid</label>";
                          }else{
                            echo "<label class='label label-lg label-danger' style='text-align: center;width: 90px!important'>Expired</label>";
                          }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <td>Note</td>
                      <td> : </td>
                      <td>
                      <?php
                      if ($in['status'] == 3) {
                        if ($in['gateway'] == 1) {
                          echo "Silakan transfer sesuai nominal ke
                              <br>Bank BRI : 6690-01010225-53-8
                              <br>a.n PARSITI";
                        }else if ($in['gateway'] == 2) {
                          echo "Silakan transfer sesuai nominal ke
                              <br>Bank BCA : 7675-1659-63
                              <br>a.n. RIZQI ALDI PRAYUGO";
                        }else if ($in['gateway'] == 3) {
                          echo "Silakan lakukan pembayaran";
                        }else if ($in['gateway'] == 4) {
                          echo "Silakan Transfer Sesuai Nominal (dibulatkan ribuan terbesar) ke :
                              <br>Telkomsel : 0853-5825-7620 ";
                        }
                      }else {
                        echo "-";
                      }
                      ?>
                      </td>
                    </tr>
                    <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </center>
          </div>
        </div>
        <?php
      }else {
        // show all invoice
        ?>
        <div class="card">
          <div class="card-header">
            <h5>Daftar Tagihan</h5>
            <span>Menampilkan 10 data terakhir</span>
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
                  <?php
                  $sql_cekinv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE user_email ="'.$_SESSION['usermail'].'"');
                  if ($sql_cekinv->num_rows != 0) {
                    while ($inv = $sql_cekinv->fetch_assoc()) {
                  ?>
                  <tr>
                    <td scope="row"><?=$inv['id'];?></td>
                    <td style="word-wrap: break-word"><?=$inv['paket'];?></td>
                    <td style="word-wrap: break-word"><?=$inv['lokasi'];?></td>
                    <td style="word-wrap: break-word"><?=$inv['domain'];?></td>
                    <td style="word-wrap: break-word;"><?=$inv['exp'];?> UTC+7</td>
                    <td>
                      <?php
                        if ($inv['status'] == 5) {
                          echo "<label class='label label-lg label-success'style='text-align: center;width: 90px!important'>Paid</label>";
                        }else if ($inv['status'] == 3) {
                          echo "<label class='label label-lg label-info' style='text-align: center;width: 90px!important'>Unpaid</label>";
                        }else{
                          echo "<label class='label label-lg label-danger' style='text-align: center;width: 90px!important'>Expired</label>";
                        }
                      ?>
                    </td>
                    <td>
                      <a href="<?=$config['url'];?>/invoice.php?id=<?=$inv['id'];?>">
                      <label class="label label-lg label-inverse" style="cursor:pointer">Detail <span class="fas fa-caret-down"></span></label>
                      </a>
                    </td>
                  </tr>
                  <?php
                    }
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
        <?php
      }
        ?>

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
