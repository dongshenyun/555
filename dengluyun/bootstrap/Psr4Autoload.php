<meta charset="utf-8">
<?php
class Psr4Autoload
{
protected $maps=[];
function __construct()
{
	spl_autoload_register([$this,'autoload']);
}	
function autoload($className)
{
$pos=strrpos($className,'\\');
$namespace=substr($className,0,$pos);
$realClass=substr($className,$pos+1);
$this->mapload($namespace,$realClass);
}
protected function mapload($namespace,$realClass)
{
	
	if(array_key_exists($namespace,$this->maps)){
		$namespace=$this->maps[$namespace];
	}
	$namespace=rtrim(str_replace('\\/','/',$namespace),'/').'/';	
		
	$filePath=$namespace.$realClass.'.php';
	//echo "$filePath <br>";
if(file_exists($filePath)){
	include $filePath;
}else{
	die('该文件不存在!');
	}	
}
	function addMaps($namespace,$path){
		if(array_key_exists($namespace,$this->maps))
		{
			die('此命名空间已映射过');
			
		}
		$this->maps[$namespace]=$path;
	}
}	
	
?>
















