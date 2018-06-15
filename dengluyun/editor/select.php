<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<?php
include('session.php');
  include('../../config/mysql.php');
  $pid=$_GET['pid']+0;
if($pid>0){
//$sql="select path from hotai where id={$pid}";
$sql=$db->selectt("path",table,"where id={$pid}");	
//$res=mysql_query($sql);	

$path=mysql_result($sql,0,0);

$typeres=$db->select(table,"where id in ({$path}{$pid}) order by id");

	
}
function ulink(){
 $file='../../cache/com_index.php.php'; //旧目录
 $filee='../../cache/com_set.php.php';
 unlink($file); 
 unlink($filee);
 echo "del.php";
 }
?>

<style type="text/css">
table.hovertable {
	font-family: verdana,arial,sans-serif;
	font-size:18px;
	color:#333333;
	border-width: 1px;
	border-color: #999999;
	border-collapse: collapse;
	width:720px;
}
table.hovertable th {
	background-color:#c3dde0;
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.hovertable tr {
	background-color:#d4e3e5;
}
table.hovertable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
a{text-decoration:none;}
a:hover{
     color:black;
background:lightyellow;}
tr:hover{
     color:yellow;
}
</style>
<center>
       <table class="hovertable">  
	   <?php  echo "<table class='hovertable'>"; ?>
		  <tr><th><a href="delect.php">查看文章</a></th><th><a href="select.php">查看分类</a></th>
          <th><a href="fenlei.php">添加分类</a></th><th><a href="<?php ulink();?>">清除缓存</a></th></tr>

<?php
if($typeres && $db->rows($typeres)>0){
	while($row=mysql_fetch_assoc($typeres)){
echo "<a href='select.php?pid={$row['id']}'>{$row['name']}</a>&gt&gt";		
		}
	}
$pid=$_GET['pid']+0;
$pid=htmlspecialchars($pid);
    echo "<tr><th>分类名</th><th>删除</th><th>文章</th><th>子类</th></tr>";
        $sqlin=$db->select(table,"where pid={$pid} order by concat(path,id)");
		
       while($rows=mysql_fetch_array($sqlin)){
		   if($rows['name']!=''){ 
      echo "<td><a href='select.php?pid={$rows['id']}'>{$rows['name']}</a></td>";
		   
           echo "<td><a onclick=\"return confirm('确定删除么')\" href='action.php?action=del&id={$rows['id']}'>删除</a></td>";
		   echo "<td><a href='demo.php?pid={$rows['id']}&name={$rows['name']}&path={$rows['path']}{$rows['id']},'>添加文章</a></td>";
		     echo "<td><a href='fenlei.php?pid={$rows['id']}&name={$rows['name']}&path={$rows['path']}{$rows['id']},'>添加子类</a></td>";
			    
			 }
	  echo "</tr>";
}
      echo "</table></center>";	
		
	
	
	mysql_close();

?>
 
           <form action="action.php?action=add" method="post">
		   <input type="hidden" name="pid" value="<?php if(isset($_GET['pid'])){echo "{$_GET['pid']}";}else{echo "0";} ?>">
		   <input type="hidden" name="path" value="<?php if(isset($_GET['path'])){echo "{$_GET['path']}";}else{echo "0,";} ?>">
		  <h2><?php if(isset($_GET['name']))
		  {echo "{$_GET['name']}";}
	  else{echo "";} ?></h2><div style="display:none"><input type="text" name="name">
		   
		   <input type="submit" value="添加" name="sub">
		   <input type="reset" value="重置"></div>
		  
		   </form>
	<center><a href="select.php?pid=0">总内容</a>&gt&gt</center>	   
		   
		   
		   