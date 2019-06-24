<?php
session_start();
if (isset($_SESSION['userid'])){
  require_once "files/config.php";
  $title = "Testimoni | ".$config['shortname'];
  require_once "files/header.php";
?>
  <!-- content -->
        <div class="pcoded-content">
          <div class="pcoded-inner-content">
            <div class="main-body">
              <div class="page-wrapper" style="padding:1rem">

                <div class="alert alert-info background-info">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="far fa-times-circle"></i>
                  </button>
                  <strong>INFORMASI:</strong>
                  <p>Info Maintenance : 19 Sept 2018 01:00-02.30 WIB</p>
                </div>

                <div class="page-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header">
                          <h5>Bagaimana penilaian Anda tentang layanan kami ?</h5>
                          <div class="card-header-right">
                          </div>
                        </div>
                        <div class="card-block">
                          <form action="" method="POST" enctype="multipart/form-data" id="editor" name="editor">
                            <input type="hidden" name="csrf_token" value="6957c464b8b3bbcd8b12ae0ba3be6e19b7b7d2ed705f1cf70c1e70beac4926b1"> <input type="hidden" name="insert" value="1">
                            <div class="form-group">
                              <label>Nilai :</label>
                              <select class="form-control form-control-sm col-12 col-md-6 col-lg-6" name="rating" required>
                                <option value=""> Pilih Nilai </option>
                                <option value="1"> 1 - Sangat Buruk </option>
                                <option value="2"> 2 - Buruk </option>
                                <option value="3"> 3 - Cukup</option>
                                <option value="4"> 4 - Baik </option>
                                <option value="5" selected> 5 - Sangat Baik </option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Komentar (max 160 karakter) :</label>
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
