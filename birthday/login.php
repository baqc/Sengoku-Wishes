<?php
include('./connect1.php');
ob_start();
header("Content-type: text/html; charset=utf-8");
mysql_query("set names utf8");
$id = $_GET[id];
if ($id == '') {
    header("location:../");
}
$sql = ("select * from list where id=$id");
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
$toname = $row[toname];
$toname1 = $_POST['toname1'];
if ($toname1 == $toname ) {
    echo '<meta http-equiv="refresh" content="1;url=BirthdayCake.php?id='.$id.'">';
}
else {
	echo "<script>alert('名字错了哦')</script>";
}
?>
