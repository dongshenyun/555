<meta charset="utf-8">
<?php
class Start
{
static public $auto;
static function init()
{
self::$auto = new Psr4Autoload();
}	
static function route(){
	if(empty($_GET['m'])){$m='index';}else{$m=$_GET['m'];}	
if(empty($_GET['a'])){$a='index';}else{$a=$_GET['a'];}
	
$_GET['m']=$m;	
$_GET['a']=$a;
$m=ucfirst(strtolower($m));
$controller='controller\\'.$m.'Controller';
$obj=new $controller;
call_user_func([$obj,$a]);	
/* $lib='lib\\'.$m.'Controller';
$bj=new $lib;
call_user_func([$bj,$a]); */		
}
}
Start::init();



?>
















