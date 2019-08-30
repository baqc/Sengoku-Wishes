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
<!doctype html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=$row[title]?></title>
<link rel="stylesheet" type="text/css" href="./css/login.css" type="text/css" />
<link rel="stylesheet" href="./css/bubbles.css" type="text/css" />
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>生日快乐</h1>
			<form action="login.php?id=<?=$id ?>" method="post">
				<input id="toname1" name="toname1" type="text" placeholder="姓名">
				<button type="submit" id="login-button">进入</button>
			</form>
					
		</div>
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<script src="./js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="./js/login.js" type="text/javascript"></script>
</body>
</html>
