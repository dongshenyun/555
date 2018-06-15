<html>
<head>
<meta charset="utf-8">
<style>
*{margin:0;padding:0;}
.header{
    height:50px;
    width:960px;
	margin:0 auto;
     background:#ECF5FF;
     margin-bottom:10px;
	 opacity:0.9;
 }
p {
    font-family:"楷体";
    color:#C4E1FF;
	font-size:50px;
	text-align:center;
    -webkit-transition: all 2s ease;
            transition: all 2s ease;
}
p:hover {
	font-size:60px;
    color: red;
  opacity:0.3;
}
.header:hover{
	height:60px;
	
}


 #nav{
     width:960px;
     margin:0 auto;
     margin-bottom:10px;
	 opacity:0.9;
 }
 
 #main{
     width:960px;
     height:800px;
     margin:0 auto;
     overflow:hidden;
	 opacity:0.9;
  }
 #main .right{
     width:200px;
    height:800px;
     background:#ECF5FF;
     float:right;
	 opacity:0.9;
  }
.h{
	line-height:30px;
      list-style:none;
     background:#C4E1FF;
     overflow:hidden;
	 
  }
  .g{
	height:30px;
      list-style:none;
     background:#C4E1FF;
     overflow:hidden;
  }
  ul{list-style:none;}
  ul li a{text-decoration:none;display:block;}
 #main .left{
     width:750px;
     height:800px;
	 background:#ECF5FF;
    float:left;
	opacity:0.9;
 }
 
 
 
 #footer{
     width:960px;
     height:50px;
     background:#C4E1FF;
     margin:0 auto;
     margin-top:10px;
	 opacity:0.9;
  }
  #nav ul{
      list-style:none;
     background:#C4E1FF;
     overflow:hidden;
  }
 #nav li{
     float:left;
	 
 }
 #nav li a{
     display:block;
      color:black;
     width:104px;
    font-family:黑体;
	line-height:30px;
     text-decoration:none;
     text-align:center;
	 opacity:0.8;
  }
 #nav .home{
     width:128px;
 }
 #nav li a:hover{
	 color:black;
      background:yellow;
	opacity:0.8;
 }
  a:hover{
     color:black;
      font-family:"楷体";
   font-size:30px;
 }
 </style>
 <script> 
<!-- 
function setTab(name,cursel,n){ 
for(i=1;i<=n;i++){ 
var menu=document.getElementById(name+i); 
var con=document.getElementById("con_"+name+"_"+i); 
menu.className=i==cursel?" ":""; 
con.style.display=i==cursel?"block":"none"; 


} 
}
 
//-->
function cona(){
document.getElementById('con_menu_2').style.display='block';
}
function conb(){
document.getElementById('con_menu_3').style.display='block';
}
function conc(){
document.getElementById('con_menu_4').style.display='block';
}
function cond(){
document.getElementById('con_menu_5').style.display='block';
}
function cone(){
document.getElementById('con_menu_1').style.display='block';
}

 //平台、设备和操作系统  
var system ={  
win : false,  
mac : false,  
xll : false  
};  
//检测平台  
var p = navigator.platform;  
system.win = p.indexOf("Win") == 0;  
system.mac = p.indexOf("Mac") == 0;  
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);  
//跳转语句，如果是手机访问就自动跳转页面  
if(system.win||system.mac||system.xll){  
}else{  
window.location.href="<?php echo app; ?>";  
}  

</script> 
 </head>
 <body>
 <div class="header"><p>BLOG</p></div>
 <div id="nav">
<ul>
         <li id="menu1" onclick="setTab('menu',1,5)"><a class="home" href="index.php"><{$a}></a></li>
         <li id="menu2" onclick="setTab('menu',2,5)"><a href="#"><{$b}></a></li>
         <li id="menu3" onclick="setTab('menu',3,5)"><a href="#"><{$c}></a></li>
         <li id="menu4" onclick="setTab('menu',4,5)"><a href="#"><{$d}></a></li>
         <li id="menu5" onclick="setTab('menu',5,5)"><a href="#"><{$e}></a></li>
         
    </ul>
	
 </div>
 <div id="main">
  <div class="left">
  <div class="g"><li></li></div>
  <div id="con_menu_1" style="display:none">
<{include "feny.php"}>
</div>
<div id="con_menu_2" style="display:none"><a name="tab_jian" id="tab_jian">gfg</a>
fdfdfdfd
</div>
<div id="con_menu_3" style="display:none">
dfdsfsdfds
</div>
<div id="con_menu_4" style="display:none">
r
</div>
<div id="con_menu_5" style="display:none">
fd321333333333333333333
</div>
  </div >
   <div class="right">
   <center>
   <ul>
<div class="h"><h3>分类</h3></div>
<ul>
<{include "li.php"}>
</ul>
</ul>
  </center> 
   
   </div>
 </div>
 <div id="footer"></div>
 </body>
 </html>     
  