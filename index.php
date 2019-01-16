<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Autoload.php');

$router = new Router;
$router -> run();

//it's working for balloonz.000webhost 
//AddDefaultCharset utf-8
// RewriteEngine On

// RewriteCond %{REQUEST_FILENAME} !-d
// RewriteCond %{REQUEST_FILENAME} !-f
// RewriteRule ^.*$ index.php [L,QSA]
