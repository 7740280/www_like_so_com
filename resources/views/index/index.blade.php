<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>李真杰学习</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="/local/home/css/main.css"/>
</head>
<body class="loading">
<div id="wrapper">
    <div id="bg">

    </div>

    <div id="overlay"></div>

    <div id="main">
        <!-- Header -->
        <header id="header">


            <h1>沉梦昂志</h1>
            <p>Speak &nbsp;Less&nbsp;;&nbsp;&nbsp; Do &nbsp; More</p>
            <nav>
                <ul>
                    <li><a href="#">商城</a></li>
                    <li><a href="#">博客</a></li>
                    <li><a href="#">图片</a></li>
                    <li><a href="#">留言板</a></li>
                    <li><a href="#">个人简历</a></li>
                </ul>
            </nav>
        </header>

        <!-- Footer -->
        <footer id="footer">
            <span class="copyright">&copy; 爱编程,爱学习...</span>
        </footer>

    </div>

</div>
<script>
    window.onload = function () {
        document.body.className = '';
    }
    window.ontouchmove = function () {
        return false;
    }
    window.onorientationchange = function () {
        document.body.scrollTop = 0;
    }
    document.addEventListener('DOMContentLoaded', function () {
        function audioAutoPlay() {
            var audio = document.getElementById('audio');
            audio.play();
            document.addEventListener("WeixinJSBridgeReady", function () {
                audio.play();
            }, false);
        }

        audioAutoPlay();
    });
</script>
</body>
</html>