<?php
include('./connect1.php');
$id = $_GET[id];
if ($id == '') {
    header("location:../");
}
$sql = ("select * from list where id=$id");
$res = mysql_query($sql);
$row = mysql_fetch_array($res);
?>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$row[title]?></title>
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <iframe class="full" src="./login1.php?id=<?=$id ?>" id="iframePage" onload="changeFrameHeight()" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
    <script src="js/index.js" type="text/javascript"></script>
</body>
</html>
