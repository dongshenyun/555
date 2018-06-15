<meta charset="utf-8">
<?php

   $filename="slconfig.php";

//配置文件内容
    $config="<?php";
    $config.="\n";
	$config.='$a'.'='.'array(';
	$config.="\n";
    $config.="'host'".'=>"'.$_POST["host"].'",';
    $config.="\n";
    $config.="'user'".'=>"'.$_POST["username"].'",';
    $config.="\n";
    $config.="'pass'".'=>"'.$_POST["password"].'",';
    $config.="\n";
    $config.="'dbname'".'=>"'.$_POST["dbname"].'",';
    $config.="\n";
    $config.="'flag'".'=>"'.$_POST["flag"].'",';
	$config.="\n";
	$config.=");";
	$config.="\n";
    $config.="?>";

    if(is_writable($filename)){//检测是否有权限可写
        $handle=fopen($filename, "w+");
        fwrite($handle,"\r\n".$config);
        copy($filename,"../config/sqlconfig");
        //连接数据库
        include_once($filename);
        if(!@$link=mysql_connect($a[hoat],$a[user],$a[pass])){
            echo "数据库连接失败,<a href='install.php'>返回设置</a>";
        }else{
            mysql_query("create database if not exists `$a[dbname]`");
            mysql_select_db($a[dbname],$link);

            //建表语句
            $sql[]="CREATE TABLE IF NOT EXISTS `".$a[flag]."admin` (
                   `id` int(10) unsigned NOT NULL,
                   `name` varchar(100) COLLATE utf8_bin NOT NULL,
                   `pass` varchar(100) COLLATE utf8_bin NOT NULL
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin";

            $sql[]="CREATE TABLE IF NOT EXISTS `".$a[flag]."hotai` (
                   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                   `title` varchar(60) COLLATE utf8_bin NOT NULL,
                   `keyword` varchar(100) COLLATE utf8_bin NOT NULL,
                   `text` longtext COLLATE utf8_bin NOT NULL,
                   `name` varchar(100) COLLATE utf8_bin NOT NULL,
                   `pid` int(100) unsigned NOT NULL,
                   `path` varchar(100) COLLATE utf8_bin NOT NULL,
                    PRIMARY KEY (`id`),
                    KEY `id` (`id`)
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1";
            foreach ($sql as $value) {//由于mysql_query不支持一次性执行多条语句，所以用for循环遍历
                mysql_query($value);
            }
             $sql="INSERT INTO `".$a[flag]."admin` (`id`, `name`, `pass`) VALUES('1', 'admin', 'admin');";
			if($sql){
			 mysql_query($sql);
			}else{echo "管理员需要重新设置！";}
			copy("in.txt","slconfig.php");
			/* copy("in.txt","do.php"); */
			rename("install", "all");
			mysql_close($link);
            echo "<script>window.location='out.php';</script>";
            

        }


    }else{
        echo "您没有权限操作。";
    }
?>