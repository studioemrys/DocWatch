<?php
session_start();
define ("ROOTDIR", $_SERVER['DOCUMENT_ROOT']);

define('SITEHEAD', 'includes/head.htm');
define('SITETOP', 'includes/top.htm');
define('SITEBOTTOM', 'includes/bottom.htm');

define ("ACCESS", "k3nu}p!n(0d3");
define ("DBURL", "localhost");
define ("DBUN", "studioemrys");
define ("DBPW", "$7ud!03mry$");
define ("DB", "digidokter");

define ("ACCESSLOG", ROOTDIR.'/log/access.log');
define ("ERRORLOG", ROOTDIR.'/log/error.log');
define ("TOKENLOG", ROOTDIR.'/log/token.log');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>