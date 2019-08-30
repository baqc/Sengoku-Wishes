<?php
include('connect.php');
ob_start();
header("Content-type: text/html; charset=utf-8");
mysql_query("set names utf8");
$title = $_POST['title'];
$fromname = $_POST['fromname'];
$toname = $_POST['toname'];
$content = $_POST['content'];
$template = $_POST['template'];
$url = $_POST['url'];
$sql = "insert into list (title,fromname,toname,content,template,url)  values('$title','$fromname','$toname','$content','$template','$url')";
session_start();
if (strtolower($_POST[authcode]) != $_SESSION['code']) {
    header("Refresh:0;url=$url1/index.php?cap=1");
}
elseif ($title == '' or $fromname == '' or $toname == '' or $content =='' or $template == '') {
    header("Refresh:0;url=$url1/index.php?com=1");
}
else {
    $result = mysql_query($sql);
    $id = mysql_insert_id();
    header("Refresh:0;url=$url1/success.php?id=$id&template=$template");
}
