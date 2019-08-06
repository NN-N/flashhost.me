<?php
  require_once "files/config.php";
  $title = $config['sitename'];
  require_once "files/head.php";
?>
    <body>
      <div id="runcloud-app">
        <section class="rc-navbar" id="headtop">
          <nav class="navbar navbar-runcloud" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" aria-controls="collapseExample" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar top-bar"></span>
                          <span class="icon-bar middle-bar"></span>
                          <span class="icon-bar bottom-bar"></span>
                      </button>
                      <a href="/" class="navbar-brand">
                          <img src="img/logo.png" alt="logo-brand" />
                      </a>
                  </div>
                  <div id="navbar-collapse" class="collapse navbar-collapse" role="navigation" aria-expanded="false">
                      <ul class="nav navbar-nav navbar-right main-menu">
                          <li>
                              <a href="#feature">Fitur</a>
                          </li>
                          <li>
                              <a href="#harga">Harga</a>
                          </li>
                          <li>
                              <a href="#testimoni">Testimoni</a>
                          </li>
                          <li>
                              <a href="#hubungi">Hubungi Kami</a>
                          </li>
                          <li>
                              <a href="login.php">Masuk</a>
                          </li>
                          <li>
                              <a href="register.php" type="button" class="btn btn-secondary btn-sm navbar-btn"> Daftar</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
        </section>

                <section class="rc-section rc-hero">
        <div class="rc-stars-1" v-cloak></div>
        <div class="rc-stars-2" v-cloak></div>
        <div class="rc-stars-3" v-cloak></div>
        <div class="container">
            <div class="row" v-cloak>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h1 class="rc-title">
                        <ul class="list-inline">
                            <li>Mudah</li>
                            <li>Efisien</li>
                            <li>Stabil</li>
                        </ul>
                    </h1>
                    <p class="rc-sub">Publikasikan websitemu ke internet sekarang juga!</p>
                    <ul class="list-inline cta">
                        <li>
                            <a href="#harga" role="button" class="btn btn-secondary btn-lg">Order Sekarang</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 col-xl-8 col-xl-offset-2">
                    <image-slider id="home-page-image-slider" v-cloak>
                        <li>
                            <img src="img/slider-1.png" class="img-responsive" alt="Image Showcase 1" />
                        </li>
                        <li>
                            <img src="img/slider-2.png" class="img-responsive" alt="Image Showcase 2" />
                        </li>
                        <li>
                            <img src="img/slider-3.png" class="img-responsive" alt="Image Showcase 3" />
                        </li>
                        <li>
                            <img src="img/slider-4.png" class="img-responsive" alt="Image Showcase 4" />
                        </li>
                        <li>
                            <img src="img/slider-5.png" class="img-responsive" alt="Image Showcase 5" />
                        </li>
                        <li>
                            <img src="img/slider-6.png" class="img-responsive" alt="Image Showcase 6" />
                        </li>
                        <li>
                            <img src="img/slider-1.png" class="img-responsive" alt="Image Showcase 7" />
                        </li>
                    </image-slider>
                </div>
            </div>
        </div>
        <div class="rc-cloud"></div>
    </section>

    <section class="rc-section rc-analogy" id="analogy" style="padding-bottom: 30px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="rc-title" id="harga">Tersedia 3 Lokasi Server</h2>
                    <p class="rc-sub">Tunggu apa lagi? Publikasikan websitemu!</p>
                </div>
            </div>
            <div class="row">
                <div class="rc-line hidden-xs"></div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 rc-analogy-item">
                    <div class="img-circle">
                        <img src="img/raid.svg" />
                    </div>
                    <h3 class="rc-title">US-Server (Amerika)</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 rc-analogy-item">
                    <div class="img-circle">
                        <img src="img/raid.svg" />
                    </div>
                    <h3 class="rc-title">UK-Server (Eropa)</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 rc-analogy-item">
                    <div class="img-circle">
                        <img src="img/raid.svg" />
                    </div>
                    <h3 class="rc-title">SG-Server (Asia)</h3>
                </div>
            </div>
          </div>
    </section>


  <div style="clear: both;"></div>

  <div class="container" style="margin-bottom: 60px">
    <div class="row">
      <div class="col-12 col-md-4 col-lg-4 col-sm-4">
        <div class="headpkt pktbronze">
            <h3>BRONZE</h3>
        </div>
        <div class="navpkt"></div>
        <div class="deskpkt">
          <div class="it b_bronze">Rp. 4.000/bln</div>
          <div class="it b_bronze">Rp. 40.000/thn</div>
          <div class="it b_bronze">100MB SSD Storage</div>
          <div class="it b_bronze">Unlimited Bandwith</div>
          <div class="it b_bronze">1 Add On Domain</div>
          <div class="it b_bronze">cPanel - CentOS</div>
        </div>
        <div class="orderpkt b_bronze">
          <center>
            <form action="order.php" method="POST" style="padding: 0">
              <button type="submit" name="Bronze" class="btn btn-bronze btnpkt">Beli</button>
            </form>
          </center>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4 col-sm-4">
        <div class="headpkt pktsilver">
            <h3>SILVER</h3>
        </div>
        <div class="navpkt"></div>
        <div class="deskpkt">
          <div class="it b_silver">Rp. 9.000/bln</div>
          <div class="it b_silver">Rp. 90.000/thn</div>
          <div class="it b_silver">512MB SSD Storage</div>
          <div class="it b_silver">Unlimited Bandwith</div>
          <div class="it b_silver">2 Add On Domain</div>
          <div class="it b_silver">cPanel - CentOS</div>
        </div>
        <div class="orderpkt b_silver">
          <center>
            <form action="order.php" method="POST" style="padding: 0">
              <button type="submit" name="Silver" class="btn btn-silver btnpkt">Beli</button>
            </form>
          </center>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4 col-sm-4">
        <div class="headpkt pktgold">
            <h3>GOLD</h3>
        </div>
        <div class="navpkt"></div>
        <div class="deskpkt">
          <div class="it b_gold">Rp. 12.000/bln</div>
          <div class="it b_gold">Rp. 120.000/thn</div>
          <div class="it b_gold">1GB SSD Storage</div>
          <div class="it b_gold">Unlimited Bandwith</div>
          <div class="it b_gold">3 Add On Domain</div>
          <div class="it b_gold">cPanel - CentOS</div>
        </div>
        <div class="orderpkt b_gold">
          <center>
            <form action="order.php" method="POST" style="padding: 0">
              <button type="submit" name="Gold" class="btn btn-gold btnpkt">Beli</button>
            </form>
          </center>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-6">

      </div>
    </div>
  </div>

  <div style="clear: both;"></div>

    <section class="rc-section rc-gradient-bg rc-testimoni" id="testimoni">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="rc-title">Testimoni Pelanggan</h2>
                    <p class="rc-sub"></p>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider-container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="testimonial-slider">
                                        <div class="item active">
                        <h4 class="description">After testing RunCloud we were blown away by the features and amazing support. We decided to migrate from our current Cloud Hosting Control Panel and haven&#039;t looked back since.</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person1.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Markus Henriksson
                            <span>CTO, Nordway Store AB, Sweden
                                <span>
                        </h6>
                    </div>
                                        <div class="item ">
                        <h4 class="description">Setting up servers for PHP apps becomes painless with RunCloud. And it supports some advanced features too like virtual hosts, server alias, git hook deploy...What more can I ask for?</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person2.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Iszuddin Ismail
                            <span>CTO, Xentral Methods, Malaysia
                                <span>
                        </h6>
                    </div>
                                        <div class="item ">
                        <h4 class="description">Runcloud is a flexible and capable tool backed by a team who is proactive and always ready to help. They go above and beyond.</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person1.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Thierry Fortier
                            <span>System Administrator, RNC Média INC, Canada
                                <span>
                        </h6>
                    </div>
                                        <div class="item ">
                        <h4 class="description">Loved the simplicity of getting things done without limitation, just pop and deploy. Easy.</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person2.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Akif Rabbani
                            <span>CTO, Bayam Teknologi Resources, Malaysia
                                <span>
                        </h6>
                    </div>
                                        <div class="item ">
                        <h4 class="description">RunCloud is the perfect cloud management solution I needed for my company. Fast, easy and flexible platform to setup your servers in no time. Excellent and highly skilled online support to deliver best performance.</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person1.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Fabio Tielen
                            <span>CEO &amp; Developer of 7GRAFIX, Belgium
                                <span>
                        </h6>
                    </div>
                                        <div class="item ">
                        <h4 class="description">I am very satisfied with the RunCloud service. No downtime and the customer support is really good. Keep up the good work</h4>
                        <div class="photo-holder">
                            <img src="<?=$config['url'];?>/img/person2.png" alt="profile-photo">
                        </div>
                        <h6 class="name">Hariz
                            <span>Director, ProfHariz.com, Malaysia
                                <span>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="rc-section" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2 class="rc-title">Fitur-Fitur</h2>
                    <p class="rc-sub">Publikasikan websitemu ke internet sekarang juga!</p>
                </div>
            </div>
            <div class="row rc-features-list-general" v-cloak v-scroll-reveal="{ duration: 1000, scale: 0.6, easing: 'ease-in-out', interval: 0 }">
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-rocket-ship"></i>
                        <h3 class="title">Fast Deployment</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-wrench"></i>
                        <h3 class="title">Easy Configuration</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-shield"></i>
                        <h3 class="title">Secured Panel</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-controls-2"></i>
                        <h3 class="title">Simple Control Panel</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-alarm"></i>
                        <h3 class="title">Direct Notification</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-cardiogram"></i>
                        <h3 class="title">Web Monitoring</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-handshake"></i>
                        <h3 class="title">SLA Friendly</h3>
                    </div>
                </div>
                                <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <div class="feature">
                        <i class="rc rc-auto-update"></i>
                        <h3 class="title">Auto Update</h3>
                    </div>
                </div>
                            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <a href="#harga" role="button" class="btn btn-secondary outline btn-lg">Pilih Paket
                        <i class="rc rc-arrow-thin-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--
    <section class="rc-section rc-cta">
    <div class="container">
                    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <h2 class="rc-title">Ready to get started?</h2>
                    <p class="rc-sub">Get in touch, or start your free trial today.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <ul class="list-inline">
                        <li><a href="https://manage.runcloud.io/auth/register" role="button" class="btn btn-secondary btn-lg">Start My 5-Day Free Trial</a></li>
                        <li><a href="/contact.html" role="button" class="btn btn-white outline btn-lg">Contact our Sales</a></li>
                    </ul>
                </div>
            </div>
            </div>

</section> -->



            <section class="rc-footer" id="footer">
    <footer class="footer-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="footer-grid-container">
                        <div>
                            <h4>Company</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Our Team</a></li>
                                <li><a href="">Referral Program</a></li>
                                <li><a href="">Logos and Banners</a></li>
                                <li><a target="_blank" href="http://webiptek.com">Blog</a></li>
                                <li><a href="#hubungi">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>Quick Access</h4>
                            <ul class="list-unstyled">
                                <li><a href="#harga">Pricing</a></li>
                                <li><a href="#feature">Features</a></li>
                                <li><a href="">Credit</a></li>
                                <li><a href="">Sign In</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>Resources</h4>
                            <ul class="list-unstyled">
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Documentation</a></li>
                                <li><a href="">API</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>Legal</h4>
                            <ul class="list-unstyled">
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms of Service</a></li>
                                <li><a href="">General Data Protection Regulation</a></li>
                                <li><a href="">Data Processing Agreement</a></li>
                            </ul>
                        </div>
                        <div class="item newsletter">
                            <newsletter></newsletter>

                            <h4>Stay in touch</h4>
                            <ul class="list-unstyled list-inline social-link">
                                <li>
                                    <a href="https://www.facebook.com/" class="facebook" target="_blank" rel="nofollow">
                                        <i class="rc rc-facebook rc-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" class="twitter" target="_blank" rel="nofollow">
                                        <i class="rc rc-twitter rc-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/" class="youtube" target="_blank" rel="nofollow">
                                        <i class="rc rc-youtube rc-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer-bottom">
        <div class="container">
            <img src="<?=$config['logo'];?>" class="pull-left" />
            <div class="copyright pull-right">
                <p>FlashHost.ME</p>
                <p>Copyright © 2018. All Rights Reserved.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </footer>
</section>
        </div>

<a href="#headtop" id="topBtn" title="Go to top" style="display: none;position: fixed;bottom: 20px;right: 30px;z-index: 99;font-size: 18px;border: none;outline: none;color: white;cursor: pointer;padding: 15px;border-radius: 4px;">
  <img src="img/scrolltop.png" width="50px!important" />
</a>

        <script src="files/js/manifest.js"></script>
        <script src="files/js/vendor.js"></script>
        <script src="files/js/app.js"></script>
        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                document.getElementById("topBtn").style.display = "block";
            } else {
                document.getElementById("topBtn").style.display = "none";
            }
        }
        </script>
    </body>
</html>
