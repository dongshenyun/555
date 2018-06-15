<?php
namespace content;
//include 'tpl.php ';
use \lib\tpl;
class Content extends tpl
{

function __construct()
{
	
	$config=$GLOBALS['config'];
	parent::__construct($config['TPLA_VIEW'],$config['TPLA_CACHE']);
}

}
?>
<meta charset="utf-8">







