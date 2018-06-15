<?php
function tx(){
include('./config/mysql.php');
include(path.'/fyclass.php');
include(path.'/cutpage.php');
include('cut.php');
//switch(''){
$pid=$_GET['fenlei'];	
	//case $id:
$id=$_GET['id'];
$id=htmlspecialchars($id);
$pid=htmlspecialchars($pid);
$ipage = isset($_GET["ipage"]) ? intval($_GET["ipage"]) : 1; 
if(!empty($_GET['id'])){
$id=htmlspecialchars($id);
$sql = $db->select(table,"where id='$id'");
$rows = $db->myarray($sql);
echo "<center><h3>".$rows['title']."</h3></center>";
echo "<hr>";
//echo "<center><li>".htmlspecialchars_decode($rows['text'])."</li></center>";

$CP = new cutpage($rows['text']); 
$page = $CP->cut_str(); 
echo htmlspecialchars_decode($page[$ipage - 1]); 
echo '<center>' . $CP->pagenav() . '</center>';

//echo "<br>";

}
elseif($_GET['id']=""or!empty($_GET['fenlei'])){

$sql=$db->select(table,where);  
$totalRows=$db->rows($sql);   //总记录数  
$pageSize=5;
$fenye=new Page($pageSize,$totalRows);
//echo $startCount;
$sqli=$db->select(table,"where pid={$pid} limit {$fenye->limit()}");
if($sqli){
while($tows=$db->myarray($sqli)){
   //echo "<center><li><a href='set.php?fenlei={$tows['id']}'>{$tows['name']}</a><li></center><br>";
   $contentes = strip_tags($tows['text']);
   $contentes = htmlspecialchars_decode($contentes);
   //$contentes=html_entity_decode($contentes);
   if( mb_strlen($contentes,'utf-8')>200){
   $view=mb_substr($contentes,0,200,'utf-8');
   //$view=cut_str($contentes,200,0,'UTF-8','...');
   echo $url[url]."{$tows['id']}'>{$tows['title']}</a></li></center><br>";
   echo $url[cut]."{$tows['id']}'>{$view}......</a></li>";
  
   }else{
   echo $url[url]."{$tows['id']}'>{$tows['title']}</a></li></center><br>";  
   }
   echo "<hr><br>";

}
}
$fenye->all();
}
}
?>