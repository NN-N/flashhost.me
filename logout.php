<?php
require_once 'files/config.php';
session_start();
session_destroy();
$home = $config['url'].'/login.php';
header('Location: '.$home.'');
?>
