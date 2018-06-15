<?php
namespace lib;
class tpl{
	private $template_dir='./apotion/view/index';
    private $compile_dir='./cache';
	public $left_delimiter  =  '<{';          //在模板中嵌入动态数据变量的左定界符号
    public $right_delimiter =  '}>';  
    private $tpl_vars=array();

    public function __construct($template_dir,$compile_dir)	
	{
		$this->template_dir=rtrim($template_dir,'/').'/';
		$this->compile_dir=rtrim($compile_dir,'/').'/';
		//$this->tpl_vars=array();
		/*  */
	}	

		
	public function assign($tpl_var,$value=null)
	{
		if($tpl_var!="")
		
		$this->tpl_vars[$tpl_var]=$value;
		
	}	
	public function display($filename){
		
		$tplfile=$this->template_dir.$filename;
		if(!file_exists($tplfile)){
			return false;
		}	
			$comfilename=$this->compile_dir."com_".$filename.".php";
		if(!file_exists($comfilename)||filemtime($comfilename)<filemtime($tplfile)){
			
			$repcontent=$this->tpl_replace(file_get_contents($tplfile));
			file_put_contents($comfilename,$repcontent);
		}
		include $comfilename;
 }
     private function tpl_replace($content){
		 /* 将左右定界符号中，有影响正则的特殊符号转义  例如，<{ }>转义\<\{ \}\> */
            $left = preg_quote($this->left_delimiter, '/');
            $right = preg_quote($this->right_delimiter, '/');
         $pattern=array(
		 '/'.$left.'\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*'.$right.'/i',  
		  
		     '/'.$left.'\s*if\s*(.+?)\s*'.$right.'(.+?)'.$left.'\s*\/if\s*'.$right.'/ies',
				'/'.$left.'\s*while\s*(.+?)\s*'.$right.'(.+?)'.$left.'\s*\/while\s*'.$right.'/ies',
                /* 匹配elseif标识符, 例如 "<{ elseif $col == "sex" }>" */
                '/'.$left.'\s*else\s*if\s*(.+?)\s*'.$right.'/ies', 
                /* 匹配else标识符, 例如 "<{ else }>" */
                '/'.$left.'\s*else\s*'.$right.'/is',   
                /* 用来匹配模板中的loop标识符，用来遍历数组中的值,  例如 "<{ loop $arrs $value }> <{ /loop}>" */
                '/'.$left.'\s*loop\s+\$(\S+)\s+\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*'.$right.'(.+?)'.$left.'\s*\/loop\s*'.$right.'/is',
                /* 用来遍历数组中的键和值,例如 "<{ loop $arrs $key => $value }> <{ /loop}>"  */
                '/'.$left.'\s*loop\s+\$(\S+)\s+\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*=>\s*\$(\S+)\s*'.$right.'(.+?)'.$left.'\s*\/loop \s*'.$right.'/is', 
                /* 匹配include标识符, 例如，'<{ include "header.html" }>' */
                '/'.$left.'\s*include\s+[\"\']?(.+?)[\"\']?\s*'.$right.'/ie'
				
		 );
		 $replacement=array(
		 
		 '<?php echo $this->tpl_vars[\'${1}\']; ?>',
		  '$this->stripvtags(\'<?php if(${1}) { ?>\',\'${2}<?php } ?>\')',
                '$this->stripvtags(\'<?php while(${1}) { ?>\',\'${2}<?php } ?>\')',			
                /* 替换elseif的字符串 <?php } elseif($col == "sex") { ?> */
                '$this->stripvtags(\'<?php } elseif(${1}) { ?>\',"")',  
                /* 替换else的字符串 <?php } else { ?> */
                '<?php } else { ?>',   
                /* 以下两条用来替换模板中的loop标识符为foreach格式 */
                '<?php foreach($this->tpl_vars["${1}"] as $this->tpl_vars["${2}"]) { ?>${3}<?php } ?>',  
                '<?php foreach($this->tpl_vars["${1}"] as $this->tpl_vars["${2}"] => $this->tpl_vars["${3}"]) { ?>${4}<?php } ?>',    
                /*替换include的字符串*/
                'file_get_contents($this->template_dir."/${1}")'
			
			);
	 
	 
	 
	 $repcontent=preg_replace($pattern,$replacement,$content);
		 
		 return $repcontent;
	 }
			
		 private function stripvtags($expr, $statement='') {
            /* 匹配变量的正则 */
            $var_pattern = '/\s*\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\s*/is'; 
            /* 将变量替换为值 */
            $expr = preg_replace($var_pattern, '$this->tpl_vars["${1}"]', $expr); 
            /* 将开始标记中的引号转义替换 */
            $expr = str_replace("\\\"", "\"", $expr);
            /* 替换语句体和结束标记中的引号 */
            $statement = str_replace("\\\"", "\"", $statement); 
            /* 将处理后的条件语句相连后返回 */
            return $expr.$statement;                             
        }	
			
			
			
			
			
		}
				
		
		
		
?>
<meta charset="utf-8">







