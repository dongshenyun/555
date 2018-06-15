<meta charset="utf-8">
<?php
$b= array(
	    'a'=>$title=htmlspecialchars_decode($_POST['bti']),
		'b'=>$keyword=htmlspecialchars($_POST['bti2']),
		'c'=>$text=htmlspecialchars_decode($_POST['myDoc']),
		'd'=>$pid=htmlspecialchars($_POST['pid']),
		'e'=>$name=htmlspecialchars($_POST['name']),
		'f'=>$path=htmlspecialchars($_POST['path']),
		'id'=>$id =htmlspecialchars($_GET['id']),
		);
$a= array(
		'update'=>$update="title='$b[a]',keyword='$b[b]',text='$b[c]',pid='$b[d]',name='$b[e]',path='$b[f]'",
		'where'=>$where="where id='$id'",
		'insert'=>$insert="('null','$b[a]','$b[b]','$b[c]','$b[d]','$b[e]','$b[f]')",
		'inser'=>$inser="(id,title,keyword,text,pid,name,path)",
		'fenlei'=>$fenlei="(id,name,pid,path)",
		'fenle'=>$fenle="('null','$b[e]','$b[d]','$b[f]')",
		'del'=>$del="where id = '$b[id]' or path like '%,{$b[id]},%'",
	);	
define(BJ,"$a[update]");
define(BJW,"$a[where]");
define(BJI,"$a[insert]");
define(BJN,"$a[inser]");
define(BJF,"$a[fenlei]");
define(BJl,"$a[fenle]");
define(BJD,"$a[del]");
?>











