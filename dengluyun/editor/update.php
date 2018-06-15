<html>
<head>
   <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <title>SimpleTextEditor</title>
    <script type="text/javascript" src="SimpleTextEditor.js"></script>
    <link rel="stylesheet" type="text/css" href="SimpleTextEditor.css">
</head>
<body>
<?php
include('session.php');
include('../../config/mysql.php');
$id=$_GET['id'];
$id=htmlentities($id);
$sql = $db->select(table,"where id='$id'");
$rows = mysql_fetch_array($sql);
if(isset($_POST['sub'])){
	include('../../config/con_fig.php');
    $db->update(table,BJ,BJW);
		$rows = mysql_affected_rows();
  // 返回影响行数
  // 如果影响行数>=1,则判断添加成功,否则失败
  if($rows >= 1)
  {
    echo "编辑成功";
    header("location:delect.php");
  }else{
    echo   "编辑失败" ;
//   href("addUser.php");
    }
	 
	 
 }

mysql_close();

?>
  <center>
    
	   
	
	   <?php 
          include('add.php');
	   ?>
	   
	   
</center>
</body>
</html>