<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0,user-scalable=0" />
<style>
*{margin:0;padding:0;}

#header{
    height:50px;
	width:100%;
	margin:0 auto;
     background:#ECF5FF;
     margin-bottom:10px;
	 opacity:0.9;
 }
h {
    font-family:"楷体";
    color:#C4E1FF;
	font-size:50px;
	text-align:center;
	-webkit-transition: all 2s ease;
            transition: all 2s ease;
}
h:hover {
    color:red;
  opacity:0.3;
 font-size:60px;
}
h3 {
    font-family:"黑体";
    color:blue;
	font-size:30px;
	text-align:center;
	-webkit-transition: all 2s ease;
            transition: all 2s ease;
}
 .g{
	height:30px;
      list-style:none;
     background:#C4E1FF;
     overflow:hidden;
  }
#header:hover{
	height:60px;
	font-size:60px;
}
 #nav{
     width:100%;
     margin:0 auto;
     margin-bottom:10px;
	 opacity:0.9;
 }
 
 #main{
	 font-family:"黑体";
	 width:100%;
	 min-height:100%;
     _height:100%;
     margin:0 auto;
   overflow:auto;
	 background:#ECF5FF;
	 /*background-image:url(image/fofa.jpg);*/
	
	 opacity:0.9;
  }
 li{list-style:none;}
 li a{text-decoration:none;display:block;}
 #footer{
     width:100%;
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
	 width:20%;
 }
 #nav li a{
	display:block;
      color:black;
     height:30px;
    line-height:30px;
     text-decoration:none;
     text-align:center;
  }
   #nav li a:hover{
	 color:black;
      background:yellow;
	  font-size:30px;
	opacity:0.8;
 }
 #nav .home{
     width:128px;
 }
 a:hover{
     color:black;
      font-family:"楷体";
	  text-decoration:none;
 }
 </style>
 <script>
</script>
 </head>
 <body>
 <div id="header"><center><h>BLOG</h><center></div>
 <div id="nav">
      <ul>
         <li><a  class="home" href="index.php"><{$a}></a></li>
         <li><a href="index.php?f=1"><{$b}></a></li>
         <li><a href="index.php?f=2"><{$c}></a></li>
         <li><a href="index.php?f=3"><{$d}></a></li>
         <li><a href="index.php?f=4"><{$e}></a></li>
         
    </ul>
 </div>
 <div id="main">
  <div class="g"></div>
 <?php tx(); ?>

 </div>
 <div id="footer"></div>
 </body>
 </html>     		
		
		
		

  		
