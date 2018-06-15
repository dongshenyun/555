<meta charset="utf-8">

<?php
if(!file_exists("./config/sqlconfig")){
	header("location:./install");
}
define('APP_PATH', dirname(__FILE__).'/bootstrap');
define('APP_FATH', dirname(__FILE__).'/config');

require(APP_PATH.'/Psr4Autoload.php');
require(APP_PATH.'/start.php');
require(APP_PATH.'/alis.php');

$config=include(APP_FATH.'/config.php');
start::route();







?>








