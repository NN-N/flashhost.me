<?php
// Site Configuration
$config = array(
  'sitename' => 'FlashHost.ME - Web Hosting Terbaik untuk Pelajar', // nama web
  'shortname' => 'FlashHost.ME',
  'url' => 'http://localhost/flashhost.me',
  'dev' => 'JB-XX',
  'desk' => 'FlashHost.ME - Penyedia Web Hosting Terbaik untuk Pelajar',
  'key' => 'hosting us murah, hosting uk murah, hosting sg murah, hosting terbaik untuk pelajar',
  'logo' => 'http://localhost/flashhost.me/img/logo.png',
  'logo-dark' => 'http://localhost/flashhost.me/img/logo-dark.png',
  'logo-grey' => 'http://localhost/flashhost.me/img/logo-grey.png',
  'google-site-verification' => '',
  'recaptcha-key' => '6LdYfDQUAAAAAAAxQELdTWLDDvM41UrgIVi0whQ4',
  'recaptcha-secret' => '6LdYfDQUAAAAANKPnnDS46jN_YKYP4-1Ur2W0NFy'
);
$timenow = date('d-m-Y H:i');
$datenow = date('d-m-Y');

// Database Configuration
$db_server = 'localhost';
$db_user = 'root';
$db_passwd = '';
$db_name = 'db_flashhost';
$db = mysqli_connect($db_server, $db_user, $db_passwd, $db_name);


### API WHM Configuration ###
// Authorization WHM Configuration

$user_US = 'root'; //username whm
$user_UK = 'root'; //username whm
$user_SG = 'root'; //username whm
$token_US = 'L5XA298EWS7EGK67H1BO1ESUGTODSCM3';
$token_UK = 'MTUN9GHPRHEHBXUMWSYON2GHKNJC7P79';
$token_SG = 'KEJVV6IN5LKT99RRKTO4329Y3JX7LGG6';
// How to get token? https://documentation.cpanel.net/display/78Docs/Manage+API+Tokens


### Moota.Co Payment Gateway Configuration ###
// automatic validation bank transfer
$val_apikey = 'Hlmpu7pnkqfmD7rWs29wRUBTNzo6YK7G5t6zBvXWVdiylK3HJF';
$val_idbca = 'E32zpLwzc1D';
$val_idbri = 'bpPkBodzA3O';

?>
