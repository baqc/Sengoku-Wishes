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
<!DOCTYPE html>
<html lang="zh-CN">
<head>
 <meta charset="UTF-8">
 <title><?=$row[title] ?></title>
 <link rel="stylesheet" href="./css/jquery.fullPage.css" type="text/css"/>
 <link rel="stylesheet" href="./css/memories.css" type="text/css"/>
 <link rel="stylesheet" href="./css/bubbles.css" type="text/css" />
</head>

<body>
<div class="bgcolor">
  <div style="z-index:100;" id="dowebok">
      <!--第一屏-->
      <div class="section">
          <div class="ly-box01">
            <div class="ly-txt01">
              <p class="ly-stxt01"><?=$row[toname] ?>:</p>
              <p class="ly-stxt02">&nbsp;&nbsp;<?=$row[content]?></p>
            </div>
        </div>
      </div>

          </div>
          <div class="ly-triangle82"></div>
      </div>

       </div>
  <!--试验-->
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
  <script src="./js/jquery-2.1.1.min.js"></script>
  <script src="./js/jquery.fullPage.min.js"></script>
  <!-- <script src="../js/auto-play.js"></script> -->
  <script src="./js/memories.js"></script>
  <audio src="../songs/<?=$row[url]?>.mp3" autoplay="autoplay" loop="loop"></audio>
</body>
</html>
