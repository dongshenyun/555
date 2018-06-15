<?php
 switch($_GET["f"]){
	case "1":
     echo "<body onload='cona()'>";	
	break;
    case "2":
     echo "<body onload='conb()'>";		
	break;
	case "3":
	 echo "<body onload='conc()'>";	
	break;
	case "4":
	 echo "<body onload='cond()'>";	
	break;
	default:
	 echo "<body onload='cone()'>";
	 break;
 }

$sql=$db->select(table,"where pid=0 order by concat(path,id)");

if($sql){
while($rows=$db->myarray($sql)){
echo $url[a]."{$rows['id']}'>{$rows['name']}</a></li>";
}
}	
?>