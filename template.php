<?php
$filename = "./install.lock";
if (file_exists($filename)) {
    ;
} else {
    header("Refresh:0;url=./install.php");
}
include("./connect.php");
$sql1 = 'select * from saying order by rand() limit 1';
$res1 = mysql_query($sql1);
$row1 = mysql_fetch_array($res1);
$saying = $row1[content];
$get = ("select * from list");
$re = mysql_query($get);
$number = mysql_num_rows($re);
?>

<html xmlns="http://www.w3.org/1999/html">
<head lang="zh">
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <style>
        @media only screen and (min-width: 641px) {
            .am-offcanvas {
                display: block;
                position: static;
                background: none;
            }

            .am-offcanvas-bar {
                position: static;
                width: auto;
                background: none;
                -webkit-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
            .am-offcanvas-bar:after {
                content: none;
            }

        }

        @media only screen and (max-width: 640px) {
            .am-offcanvas-bar .am-nav>li>a {
                color:#ccc;
                border-radius: 0;
                border-top: 1px solid rgba(0,0,0,.3);
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05)
            }

            .am-offcanvas-bar .am-nav>li>a:hover {
                background: #404040;
                color: #fff
            }

            .am-offcanvas-bar .am-nav>li.am-nav-header {
                color: #777;
                background: #404040;
                box-shadow: inset 0 1px 0 rgba(255,255,255,.05);
                text-shadow: 0 1px 0 rgba(0,0,0,.5);
                border-top: 1px solid rgba(0,0,0,.3);
                font-weight: 400;
                font-size: 75%
            }

            .am-offcanvas-bar .am-nav>li.am-active>a {
                background: #1a1a1a;
                color: #fff;
                box-shadow: inset 0 1px 3px rgba(0,0,0,.3)
            }

            .am-offcanvas-bar .am-nav>li+li {
                margin-top: 0;
            }
        }

        .my-head {
            margin-top: 40px;
            text-align: center;
        }

        .my-button {
            position: fixed;
            top: 0;
            right: 0;
            border-radius: 0;
        }
        .my-sidebar {
            padding-right: 0;
            border-right: 1px solid #eeeeee;
        }

        .my-footer {
            border-top: 1px solid #eeeeee;
            padding: 10px 0;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="am-g my-head">
    <div class="am-u-sm-12 am-article">
        <h1 class="am-article-title">
            <br>
            <font color="#FFC0FF">灵</font>
            <font color="#CC8DFF">石</font>
            <font color="#995AFF">祝</font>
            <font color="#6627FF">福</font>
            <font color="#3300FF">站</font>
        </h1>
        <p class="am-article-meta">DIY一个专属于你的祝福网页</p>
        <p class="am-article-meta">已储存<span class="am-badge am-badge-success am-round"><?=$number?></span>条祝福</p></p>
    </div>
</header>

<hr class="am-article-divider"/>
<div class="am-g am-g-fixed">
    <div class="am-u-md-9 am-u-md-push-3">
        <div class="am-g">
            <div class="am-u-sm-11 am-u-sm-centered">
                <div class="am-cf am-article">
                    <div class="am-align-left">
                    </div>
                    <ol class="am-breadcrumb">
                        <li><a class="am-icon-home" href="./">首页</a></li>
                        <li><a href="./template.php">样式</a></li>
						<!--- 站长统计--->
						
						</li>
                    </ol>

                    <text class="am-kai">
                        <section class="am-panel am-panel-success">
                            <header class="am-panel-hd">
                                <h6 class="am-panel-title">语录：</h6>
                            </header>
                            <div class="am-panel-bd">
                                <i class="am-icon-pencil am-icon-fw"></i>
                                <?=$saying?>
                            </div>
                        </section>
                    </text>
                    <ul class="am-list am-list-static am-list-border am-list-striped">
                        <li>
                            Starry 星空实例：
                            <p>
                                <img src="./case/starry.jpg" class="am-img-responsive" alt=""/>
                            </p>
                        </li>
						<li>
                            Birthday 生日实例：
                            <p>
                                <img src="./case/birth1.png" class="am-img-responsive" alt=""/>
							</p>
							<p>
								<img src="./case/birth2.png" class="am-img-responsive" alt=""/>
							</p>
							<p>
								<img src="./case/birth3.png" class="am-img-responsive" alt=""/>
                            </p>
                        </li>
                        <li>
                            更多实例：
                            <p>
                                待作....
                            </p>
                        </li>
                        <li>
                            <p>
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=298 height=52 src="//music.163.com/outchain/player?type=2&id=488388962&auto=1&height=32"></iframe>
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="am-u-md-3 am-u-md-pull-9 my-sidebar">
        <div class="am-offcanvas" id="sidebar">
            <div class="am-offcanvas-bar">

                <ul class="am-nav">
                    <font color="#8fbc8f">
                        灵石：
                        <li><img class="am-circle" src="./images/lings.jpg" width="140" height="140"/></li>
                        <hr>
                        <i class="am-icon-info-circle"></i>
                        仙灵石只出现于小说..
                        </li>
                    </font>
                    <hr>
                    <font color="#ffb6c1">
                    <li><i class="am-icon-tags"></i>友情链接</li><p>
                            <i class="am-icon-circle-o-notch am-icon-spin"></i>：
                            <a style=" text-decoration: none; color: inherit;"  href="https://www.m78.co">星云茶馆</a>
                            <p>
							<hr>
                        <a style=" text-decoration: none; color: inherit;"  href=mailto:ad@lings.cc?subject=[友链申请]灵石祝福站&body=你好，我想与你交换友链。%0d%0a我的站名：%0d%0a网址：%0d%0a图标链接：%0d%0a短介：%0d%0a联系邮箱：>我要申请</a>
                    </font>
                </ul>
            </div>

        </div>
    </div>
    <a href="http://wpa.qq.com/msgrd?v=3&uin=2628522691&site=qq&menu=yes" class="am-btn am-btn-sm am-btn-success am-icon-at am-show-sm-only my-button" data-am-offcanvas>
        <span class="am-sr">Mariko</span>
    </a>
</div>
<body style="background:url('./images/template.png');">
<footer class="my-footer">
    <br><small>© Sengoku Wishes, by Nirvana Rise Studio.</small></p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!----
<script src="assets/js/amazeui.min.js"></script>
--->

</body>
</html>
