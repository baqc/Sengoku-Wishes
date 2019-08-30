<?php
$server_name = $_POST['server'];
$database = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['passwd'];
$title1 = $_POST['title'];
$url = $_POST['url'];
$conn = mysql_connect($server_name, $username, $password); //连接数据库
if (!$conn)//如果连接数据库失败
{
    echo "<script>alert('连接数据库失败!');</script>";
    die('连接数据库失败： ' . mysql_error());
}
mysql_select_db($database, $conn);//成功的话就执行以下代码
//写入config.php
$myfile = fopen("./inc/config.php", "w") or die("Unable to open file!");
$text = '<?php ';
fwrite($myfile, $text);
$text = '$mysql_server_name = "'.$server_name.'";';
fwrite($myfile, $text);
$text = '$mysql_username = "'.$username.'";';
fwrite($myfile, $text);
$text = '$mysql_password = "'.$password.'";';
fwrite($myfile, $text);
$text = '$mysql_database = "'.$database.'";';
fwrite($myfile, $text);
$text = '$url1 = "'.$url.'";';
fwrite($myfile, $text);
$text = '$title = "'.$title1.'";';
fwrite($myfile, $text);
fclose($myfile);

//创建.lock
$lock = fopen("install.lock", "w");
fclose($lock);
//写入sql
$Sqls = file_get_contents( 'wish.sql' );
$SqlArr = explode(';', $Sqls );
foreach ( $SqlArr as $sql ) {
    mysql_query( $sql );
}
echo("<script> alert('同步完毕!') </script>");