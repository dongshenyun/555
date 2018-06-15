<?php
include("sqlconfig");

?>
<meta charset="utf-8">
<?php
//
define('zhuji',$a[host]);
define('user',$a[user]);
define('pass',$a[pass]);
define('data',$a[dbname]);
define('table',$a[flag].'hotai');
define('admin',$a[flag].'admin');

define('path',"./config");
//index.php
define('app','index.php?m=index&a=set&b=9');
//tx.php
define('where',"where pid={$pid}");
$url=array(
           //feny.php
		'fy'=>$fy="<li><a href='index.php?m=index&a=set&b=5&id=",
		   //tx.php
		'url'=>$url="<center><li><a href='index.php?m=index&a=set&b=5&id=",
		'cut'=>$cut="<li><a href='index.php?m=index&a=set&b=5&id=",           
		//li.php
        'a'=>$a="<li><a href='index.php?m=index&a=set&b=5&fenlei=",	 
		   //txwap.php
		'urlwap'=>$urlwap="<center><li><a href='index.php?m=index&a=set&b=13&id=",
		'cutwap'=>$cutwap="<li><a href='index.php?m=index&a=set&b=13&id=",
           //liwap.php
        'awap'=>$awap="<center><a href='index.php?m=index&a=set&b=13&fenlei=",
  
		   
	      );	

return [
'TPL_VIEW'=>'./apotion/view/index',
'TPL_CACHE'=>'./cache',

]



?>











