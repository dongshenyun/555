<?php
namespace controller;
//include 'tpl.php ';
use \lib\tpl;
class Controller extends tpl
{

function __construct()
{
	
	$config=$GLOBALS['config'];
	parent::__construct($config['TPL_VIEW'],$config['TPL_CACHE']);
}

}
?>
<meta charset="utf-8">







