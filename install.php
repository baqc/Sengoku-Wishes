<?php
$filename = "./install.lock";
if (file_exists($filename)) {
    header("Refresh:0;url=./index.php");
}
?>
<head lang="zh">
    <meta charset="UTF-8">
    <title>数据库同步 - 灵石祝福站 | by MarikoChiba from 星云茶馆</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                        <li><a href="install.php">安装</a></li>
                    </ol>

                    <ul class="am-list am-list-static am-list-border am-list-striped">
                        <form method="post"  class="am-form" action="./install_to_mysql.php">
                            <ul class="am-list am-list-static am-list-striped">
                                <li>
                                    <i class="am-icon-book am-icon-fw"></i>
                                    <text class="am-kai">
                                        提示：
                                        <br>1.在安装前请先明确站点目录具有读写777权限
                                        <br>2.仍有部分内容需要手动更改
                                    </text>
                                </li>
                            </ul>
                            <fieldset>
                                <div class="am-form-group">
                                    <label for="doc-ipt-text-1">数据库服务器*</label>
                                    <input name='server' type="text" class="" id="doc-ipt-text-1" placeholder="localhost">
                                </div>

                                <div class="am-form-group">
                                    <label for="doc-ta-1">数据库名称*</label>
                                    <input name="name" type="text" class="" id="doc-ipt-text-1" placeholder="wish">
                                </div>

                                <div class="am-form-group">
                                    <label for="doc-ipt-text-1">数据库用户名*</label>
                                    <input name="username" type="text" class="" id="doc-ipt-text-1" placeholder="root">
                                </div>

                                <div class="am-form-group">
                                    <label for="doc-ipt-text-1">数据库密码*</label>
                                    <input name="passwd" type="text" class="" id="doc-ipt-text-1" placeholder="123456">
                                </div>

                                <div class="am-form-group">
                                    <label for="doc-ta-1">站点title*</label>
                                    <input name="title" type="text" class="" id="doc-ipt-text-1" placeholder="灵石祝福站 | DIY祝福网页 - Nirvana Rise Studio">
                                </div>

                                <div class="am-form-group">
                                    <label for="doc-ta-1">站点网址*(尾部不要带有'/')</label>
                                    <input name="url" type="text" class="" id="doc-ipt-text-1" placeholder="https://www.lings.cc">
                                </div>

                                <p>
                                <div class="am-form-group">
                                    <button type="submit"  class="am-btn am-btn-secondary am-round">
                                        提交
                                    </button>
                                </div>
                        </form>
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
                    </font>
                </ul>
            </div>

        </div>
    </div>
</div>

<footer class="my-footer">
    <br><small>© Sengoku Wishes, by Nirvana Rise Studio.</small></p>
</footer>
<body style="background:url('./images/index.png');">
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>

</body>
</html>
