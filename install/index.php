<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>安装程序</title>
</head>
<body>
    <center>
        <h2>PHP在线安装程序</h2>
    <hr/>
        <form action="do.php" method="post">
            <table>
                <tr>
                    <td>主机地址：</td>
                    <td><input type="text" name="host"/></td>
                </tr>
                <tr>
                    <td>数据库账号：</td>
                    <td><input type="text" name="username"/></td>
                </tr>
                <tr>
                    <td>数据库密码：</td>
                    <td><input type="password" name="password"/></td>
                </tr>
                    <td>数据库名：</td>
                    <td><input type="text" name="dbname"/></td>
                </tr>
                    <tr>
                    <td>数据库表前缀：</td>
                    <td><input type="text" name="flag"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align:center;">
                        <input type="submit" value="安装"/>
                        <input type="reset" value="重置"/>
                    </td>
                </tr>
            </table>
            

        </form>
    </center>
</body>
</html>