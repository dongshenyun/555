<?php
include('session.php');
include('../../config/mysql.php');
switch($_GET['action']){
	case 'add':
	if(isset($_POST['sub'])){
	  include('../../config/con_fig.php');
		$sql=$db->insert(table,BJF,BJl);
	if(!empty($b[e])){
	if($sql){
		
	   echo "添加成功";		
		header("location:select.php");
		}else{
		header("location:select.php");
		}}}
	
	echo "<br><a href='fenlei.php'>继续添加</a>";
	break;
	
	case 'del':
	include('../../config/con_fig.php');
	$sql = $db->delete(table,BJD);

//执行
if(!$sql)
{
//跳转页面


echo "<script>alert('删除成功');history.back();</script>";


}else{
	echo "<script>alert('删除成功');history.back();</script>";
}}

/* 	$sqli = $db->delect(table,BJD);
	$id=htmlentities($id);
	//mysql_query($sql);
		if($sqli){
		
	   echo "删除成功";		
		header("location:select.php");
		
	}else{
		
		echo "删除失败";
	}

	}
 */
		
        break;


?>