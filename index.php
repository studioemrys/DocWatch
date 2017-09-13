<?php
include('config.php');
include('class/site.class.php');
include('class/pow.class.php');

$site = new Site();
$site->render(SITEHEAD);
$site->render(SITETOP);

$str = uniqid();
echo strlen($str);

$site->render(SITEBOTTOM);
?>