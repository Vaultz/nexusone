<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_SESSION['OFFERS']=json_decode(file_get_contents(__DIR__.'/../json/offers.json'),true)['OFFERS'];
?>
