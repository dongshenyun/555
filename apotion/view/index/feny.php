<head>

<style>
ul{list-style:none;}
li{list-style:none;}
li a{text-decoration:none;text-align:center;}
li:hover{
     color:black;
      background:yellow;
 }
</style>
</head>
<?php
header("Content-type: text/html; charset=utf-8"); 
include('./config/mysql.php');
include(path.'/fyclass.php');
$sql=$db->select(table,"");  
$totalRows=$db->rows($sql);   //总记录数  
$pageSize=20;


$fenye=new Page($pageSize,$totalRows);


//$pql="select * from (table) limit {$fenye->limit()}";
$pql=$db->select(table,"limit {$fenye->limit()}");
if($pql){ //根据前面的计算出开始的记录和记录数
while ($rows=$db->myarray($pql)) {
 if($rows['text']!=""){
	 echo "<br>";
 echo $url[fy]."{$rows['id']}'>{$rows['title']}</a></li>";
 echo "<hr>";//显示数据库的内容
}}}
echo "<center>{$fenye->all()}</center>";

?>