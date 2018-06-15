<?php include('../session.php'); ?>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<input type="hidden" name="pid" value="<?php if(isset($_GET['pid'])){echo "{$_GET['pid']}";}else{echo "0";} ?>">
	<input type="hidden" name="path" value="<?php if(isset($_GET['path'])){echo "{$_GET['path']}";}else{echo "0,";} ?>">
<?php
//在表格中显示表的数据，常用方式
  
	echo "<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name=''>";
       
		if(isset($_GET['name'])){
		/* 	$sql=$db->select(table,"where name ='{$name}' order by concat(path,id)");
		if($sql){
		while($rows=mysql_fetch_assoc($sql)){
			$m=substr_count($rows['path'],',')-1;
			$strpad=str_pad("",$m*6*2,"&nbsp;"); */
		  echo "<option value='{$_GET['name']}'>{$_GET['name']}</option>";
	    }
	  else{
		  echo "<option>类别</option>";
	  }
       echo "</select>";
?>
	 
     
      

	
	 


		
		
         




     
		
	
	
	
	
	
	



