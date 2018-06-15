<?php include('session.php'); ?>
<html>
<head>
   <meta http-equiv="Content-Type" charset="utf-8">
    <title>SimpleTextEditor</title>
    <script type="text/javascript" src="SimpleTextEditor.js"></script>
    <link rel="stylesheet" type="text/css" href="SimpleTextEditor.css">

</head>
<body>
     <center>
    <?php include('editor.php'); ?>
</center>
</body>
</html>
<?php 
if(isset($_POST['sub'])){
       include('../../config/con_fig.php');
		
		
if(empty($b[a]) or empty($b[c]) or empty($b[b])){
	echo "<script>alert('信息填写不完整！')</script>";
		}else{
			$sql=$db->insert(table,BJN,BJI);
			echo "<script>alert('提交成功！')</script>";
}
}
 mysql_close();
?>				
				
	  
		 
			
			




		
		
		
			
		
		



