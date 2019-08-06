<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="turbolinks-cache-control" content="no-cache">
        <title><?=$title;?></title>
        <meta name="description" content="<?=$config['desk'];?>">
        <meta name="keywords" content="<?=$config['key'];?>">
        <meta name="google-site-verification" content="<?=$config['google-site-verification'];?>">
        <meta property="og:title" content="<?=$config['sitename'];?>" />
        <meta property="og:description" content="<?=$config['desk'];?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="<?=$config['url'];?>/img/slider-1.png" />
        <link rel="icon" type="image/png" href="<?=$config['url'];?>/img/favicon-32x32.png" />
        <link rel="stylesheet" href="files/styles/bs.min.css">
        <link rel="stylesheet" href="files/styles/monokai.css">
        <link rel="stylesheet" href="files/styles/morpheus.css">
        <link rel="stylesheet" href="files/styles/slick.min.css">
        <link rel="stylesheet" href="files/styles/rc.css">
        <link rel="stylesheet" href="files/styles/styles.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="files/js/jquery.js"></script>
        <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {
            if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
                window.location.hash = hash;
              });
            } // End if
          });
          });
        </script>

        <script src="files/js/cookie.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-84825098-2', 'auto');
            ga('require', 'ec');
        </script>
      </head>
