<?php
namespace controller;
class IndexController extends Controller
{
function word(){
$a="首页";
$b="内容";
$c="热点";
$d="动态";
$e="直播";

$this->assign('a',$a);
$this->assign('b',$b);
$this->assign('c',$c);
$this->assign('d',$d);
$this->assign('e',$e);	
}
function index()
{
$this->word();
$this->display('index.php');

}	
function set()
{
switch($_GET['b']){	
case "5":
include("tx.php");
$this->word();
$this->display('set.php');
break;
case "9":
$this->word();
$this->display('wap.php');
break;
case "13":
include("txwap.php");
$this->word();
$this->display('app.php');
break;
}
}	
	
}	


?>
<meta charset="utf-8">






