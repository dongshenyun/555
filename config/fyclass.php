<?php
class Page{
protected $number;
protected $totalcount;
protected $page;
protected $totalpage;
public $url;
//public $limit;
public function __construct($number,$totalcount)
{
$this->number=$number;
$this->totalcount=$totalcount;
$this->totalpage=$this->gettotalpage();
$this->page=$this->getpage();
$this->url=$this->geturl();	
//$this->limit=$this->limit();
}	
public function gettotalpage()
{
return ceil($this->totalcount/$this->number);	
}	
protected function getpage()
{
	if(empty($_GET['page'])){
$page=1;	
}else if($_GET['page']>$this->totalpage){
$page=$this->totalpage;	
	
}else if($_GET['page']<1){
	$page=1;
	}	
else{
	$page=$_GET['page'];
}
return $page;
}
public function geturl()
{
$schema=$_SERVER['REQUEST_SCHEME'];
$host=$_SERVER['SERVER_NAME'];
$port=$_SERVER['SERVER_PORT'];
$url=$_SERVER['REQUEST_URI'];
$urlarray=parse_url($url);
//var_dump($urlarray);
$path=$urlarray['path'];	
if(!empty($urlarray['query'])){
parse_str($urlarray['query'],$array);
unset($array['page']);
$query=http_build_query($array);
if($query!=''){
	$path=$path.'?'.$query;
	
}
//return $schema.'://'.$host.':'.$port.$path;	
return $path;
}	
}
protected function seturl($str)
{
	if(strstr($this->url,'?')){
		$url=$this->url.'&'.$str;
	}else{
	
$url=$this->url.'?'.$str;
	
}	
return $url;
}

public function first()
{
	$first="<a href='{$this->seturl('page=1')}'>首页</a>";
return $first;
	
	
}
public function midden()
{
	for ($i=1;$i<=$this->totalpage;$i++) {  //循环显示出页面

//echo "<a href='feny.php?page={$i}'>{$i}</a>";
echo "<a href='{$this->seturl('page='.$i)}'>{$i}</a>";

}
}	

public function next()
{
	if($this->page+1>$this->totalpage)
	{$page=$this->totalpage;}
else{$page=$this->page+1;}
$next="<a href='{$this->seturl('page='.$page)}'>下一页</a>";
	return $next;
	
}
public function prev()
{
if($this->page-1<1){$page=1;}
else{$page=$this->page-1;}
$prev="<a href='{$this->seturl('page='.$page)}'>上一页</a>";
return $prev;	
	
}
public function end()
{
	$end="<a href='{$this->seturl('page='.$this->totalpage)}'>未页</a>";
	return $end;
	
	
}

public function all()
{
echo "<center>{$this->first()}";	
echo $this->prev();
echo $this->midden();
echo $this->next();	
echo "{$this->end()}</center>";
	//return $html;
	
}
public function limit(){
	
	$offset=($this->page-1)*$this->number;
	return $offset.','.$this->number;
	}
}
//$page=new Page($page->number,$page->totalCount);

//$show=new page(5,20);
//echo $show->geturl();
?>