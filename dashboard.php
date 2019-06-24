<?php
session_start();
if (isset($_SESSION['userid'])){
  require_once "files/config.php";
  $title = "Dashboard | ".$config['shortname'];
  require_once "files/header.php";
?>
<?php echo $_SESSION['userid']; ?>
        <!-- content -->
        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper" style="padding:1rem">
                <div class="page-body">
                  <div class="row">
                    <div class="col-md-6 col-xl-3">
                      <div class="card widget-card-1" style="margin-top:10px">
                        <div class="card-block-small">
                          <i class="icofont icofont-tack-pin bg-c-green" style="width: 60px;height: 60px;position: absolute;top: -15px;font-size: 35px;border-radius: 8px;display: flex;color: #fff;align-items: center;justify-content: center;transition: all .3s ease-in-out;">
                            <i class="fas fa-money-bill"></i>
                          </i>
                          <span class="text-c-green f-w-600">Saldo Akun (Rp.)</span>
                          <h4>0</h4>
                          <div>
                            <span class="f-left m-t-10 text-muted">
                              <i class="text-c-green f-16 icofont icofont-info-circle m-r-10"></i>Terpakai : (Rp.0)
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                      <div class="card widget-card-1" style="margin-top:10px">
                        <div class="card-block-small">
                          <i class="icofont icofont-package bg-c-pink" style="width: 60px;height: 60px;position: absolute;top: -15px;font-size: 35px;border-radius: 8px;display: flex;color: #fff;align-items: center;justify-content: center;transition: all .3s ease-in-out;">
                            <i class="fas fa-cubes"></i>
                          </i>
                          <span class="text-c-pink f-w-600">Layanan Aktif</span>
                          <h4>
                            <?php
                              $sql_cekserv = mysqli_query($db, 'SELECT * FROM tb_cpanel WHERE cp_by ="'.$_SESSION['usermail'].'" && cp_status = 5');
                              echo $sql_cekserv->num_rows;
                            ?>
                          </h4>
                          <div>
                            <span class="f-left m-t-10 text-muted">
                              <i class="text-c-pink f-16 icofont icofont-info-circle m-r-10"></i>Total layanan : (
                                <?php
                                  $sql_cekallserv = mysqli_query($db, 'SELECT * FROM tb_cpanel WHERE cp_by ="'.$_SESSION['usermail'].'"');
                                  echo $sql_cekallserv->num_rows;
                                ?>
                              )
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1" style="margin-top:10px">
                          <div class="card-block-small">
                            <i class="icofont icofont-wallet bg-c-blue icon-menu" style="width: 60px;height: 60px;position: absolute;top: -15px;font-size: 35px;border-radius: 8px;display: flex;color: #fff;align-items: center;justify-content: center;transition: all .3s ease-in-out;">
                              <i class="far fa-life-ring"></i>
                            </i>
                            <span class="text-c-blue f-w-600">Ticket Support</span>
                            <h4>0</h4>
                            <div>
                              <span class="f-left m-t-10 text-muted">
                                <i class="text-c-blue f-16 icofont icofont-info-circle m-r-10"></i>Total Tiket Support : (0)
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-xl-3">
                        <div class="card widget-card-1" style="margin-top:10px">
                          <div class="card-block-small">
                            <i class="icofont icofont-database bg-c-yellow" style="width: 60px;height: 60px;position: absolute;top: -15px;font-size: 35px;border-radius: 8px;display: flex;color: #fff;align-items: center;justify-content: center;transition: all .3s ease-in-out;">
                              <i class="fas fa-database"></i>
                            </i>
                            <span class="text-c-yellow f-w-600">Tagihan</span>
                            <h4>
                                <?php
                                  $sql_cekinv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE user_email ="'.$_SESSION['usermail'].'" && status = 3');
                                  echo $sql_cekinv->num_rows;
                                ?>
                            </h4>
                            <div>
                              <span class="f-left m-t-10 text-muted">
                                <i class="text-c-yellow f-16 icofont icofont-info-circle m-r-10"></i>Total Tagihan : (
                                <?php
                                  $sql_cekallinv = mysqli_query($db, 'SELECT * FROM tb_invoice WHERE user_email ="'.$_SESSION['usermail'].'"');
                                  echo $sql_cekallinv->num_rows;
                                ?>
                                )
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="styleSelector">
                </div>
              </div>
            </div>
          </div>
        </div>
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
  header('Location: index.php');
}
?>
