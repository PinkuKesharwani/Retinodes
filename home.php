<!DOCTYPE html>
<html lang="en">
<head>
    <title>RETINODES | HOME</title>
    <?php include_once("master/plugin.php") ?>
    <style type="text/css">
        .loader_main {
            background-color: #eeeeee;
            height: 100%;
            width: 100%;
            position: fixed;
            margin-top: 0px;
            top: 0px;
            left: 0px;
            bottom: 0px;
            overflow: hidden !important;
            right: 0px;
            z-index: 999999;
        }

        .loading-center {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .loader {
            width: 3em;
            height: 3em;
            margin: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            position: absolute;
        }

        .cube, .cube * {
            position: absolute;
            width: 71px;
            height: 71px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .sides {
            -webkit-animation: rotate 3s ease infinite;
            animation: rotate 3s ease infinite;
            -webkit-animation-delay: .8s;
            animation-delay: .8s;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: rotateX(-37.5deg) rotateY(45deg);
            transform: rotateX(-37.5deg) rotateY(45deg);
            background-image: url(img/logo-loader.png);
            background-repeat: no-repeat;
            background-size: 80%;
        }

        .cube .sides * {
            box-sizing: border-box;
            /*background-color: rgba(74, 196, 243, 0.8);*/
            background-color: rgba(56, 81, 222, 0.45);
            border: 5px solid white;
        }

        .cube .sides .top {
            -webkit-animation: top-animation 3s ease infinite;
            animation: top-animation 3s ease infinite;
            -webkit-animation-delay: 0ms;
            animation-delay: 0ms;
            -webkit-transform: rotateX(90deg) translateZ(90px);
            transform: rotateX(90deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .cube .sides .bottom {
            -webkit-animation: bottom-animation 3s ease infinite;
            animation: bottom-animation 3s ease infinite;
            -webkit-animation-delay: 0ms;
            animation-delay: 0ms;
            -webkit-transform: rotateX(-90deg) translateZ(90px);
            transform: rotateX(-90deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .cube .sides .front {
            -webkit-animation: front-animation 3s ease infinite;
            animation: front-animation 3s ease infinite;
            -webkit-animation-delay: 100ms;
            animation-delay: 100ms;
            -webkit-transform: rotateY(0deg) translateZ(90px);
            transform: rotateY(0deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .cube .sides .back {
            -webkit-animation: back-animation 3s ease infinite;
            animation: back-animation 3s ease infinite;
            -webkit-animation-delay: 100ms;
            animation-delay: 100ms;
            -webkit-transform: rotateY(-180deg) translateZ(90px);
            transform: rotateY(-180deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .cube .sides .left {
            -webkit-animation: left-animation 3s ease infinite;
            animation: left-animation 3s ease infinite;
            -webkit-animation-delay: 100ms;
            animation-delay: 100ms;
            -webkit-transform: rotateY(-90deg) translateZ(90px);
            transform: rotateY(-90deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .cube .sides .right {
            -webkit-animation: right-animation 3s ease infinite;
            animation: right-animation 3s ease infinite;
            -webkit-animation-delay: 100ms;
            animation-delay: 100ms;
            -webkit-transform: rotateY(90deg) translateZ(90px);
            transform: rotateY(90deg) translateZ(90px);
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        .home_banner {
            width: 100%;
            height: 100vh;
            /*background-image: url("img/contactus-banner.jpg")no-repeat center center;*/
            background: url("img/contactus-banner.jpg") no-repeat center center;
            background-size: cover;
            background-repeat: no-repeat;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            height: calc(100vh - 30px);
        }

        .right_navigation {
            float: right;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            width: 100%;
            display: inline-block;
            text-align: center;
            position: relative;
        }

        .top_navigation {
            position: absolute;
            width: 100%;
            z-index: 999;
            /* background: rgba(0, 0, 0, 0.1); */
            min-height: 65px;
            background: rgba(255, 255, 255, 0.49);
        }

        .right_menu_box {
            background: #0a57f4;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-item-align: center;
            align-self: center;
            -webkit-box-orient: vertical;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 70px;
            height: 65px;
            cursor: pointer;
            margin: 0 auto;
            padding: 22px 23px;
            float: right;
            z-index: 2;
            position: absolute;
            right: 0;
        }

        .get_quotebox {
            display: inline-block;
            float: right;
            background: #ffffff;
            padding: 22px 20px 19px;
            z-index: 2;
            position: absolute;
            right: 70px;
        }

        .menu_getquote {
            text-transform: uppercase;
            text-shadow: 1px 1px #dcdcdc59;
            font-size: 16px;
        }

        .right_menu_box span {
            -ms-flex-item-align: end;
            align-self: flex-end;
            height: 2px;
            width: 100%;
            background: #ffffff;
            box-shadow: 1px 1px #808080;
        }

        .menu_second {
            width: 75%;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        .menu_third {
            width: 50%;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .right_menu_box:hover .menu_first {
            -webkit-animation: menu-hover 1s infinite ease-in-out alternate;
            animation: menu-hover 1s infinite ease-in-out alternate;
        }

        .right_menu_box:hover .menu_second {
            -webkit-animation: menu-hover 1s infinite ease-in-out alternate forwards .2s;
            animation: menu-hover 1s infinite ease-in-out alternate forwards .2s;
        }

        .right_menu_box:hover .menu_third {

            -webkit-animation: menu-hover 1s infinite ease-in-out alternate forwards .4s;
            animation: menu-hover 1s infinite ease-in-out alternate forwards .4s;
        }

        .header_menu_ul {
            padding: 0px;
            position: absolute;
            right: -100%;
            transition: .5s all;
            z-index: -1;
            margin: 0px;
        }

        .top_menu_show {
            z-index: 1;
            right: 225px;
        }

        .header_menu_ul li {
            display: inline-block;
            float: left;
            position: relative;
        }

        .header_menu_ul a {
            display: inline-block;
            float: left;
            padding: 22px 15px 19px;
            color: #ffffff;
            text-shadow: 1px 1px #dcdcdc21;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .header_menu_ul a:before {
            content: "";
            width: 100%;
            height: 2px;
            background: #0a57f4;
            position: absolute;
            bottom: -1px;
            left: 0;
            transform: scale(0);
            transition: all 700ms ease 0s;
        }

        .header_menu_ul a:after {
            content: "";
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #0a57f4;
            margin: 0 auto;
            position: absolute;
            bottom: -3px;
            left: 0;
            right: 0;
            transform: scale(0);
            transition: all 700ms ease 0s;
        }

        .header_menu_ul a:hover:before {
            transform: scale(1);
        }

        .header_menu_ul a:hover:after {
            transform: scale(1);
        }

        .header_menu_ul a:hover {
            color: #0a57f4;
        }

        .banner_logobox {
            text-align: center;
        }

        .banner_logo_text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .retinodes_tagline {
            font-size: 24px;
            color: #ffffff;
            text-transform: uppercase;
            margin-top: 10px;
            letter-spacing: 1px;
            text-shadow: 1px 1px #4c4c4c;
        }

        .com_name {
            letter-spacing: 2px;
            color: #ffffff5c;
            text-transform: uppercase;
            text-align: center;
            font-size: 52px;
            font-family: 'Raleway', sans-serif;
            font-weight: 900;
            line-height: 70px;
            margin-top: 10px;
        }
        .com_name span {
            float: left;
            transition: 1s all;
        }
        .com_name span:hover {
            color: #ffffff;
        }
        .com_last {
            font-size: 31px;
            font-weight: bold;
            color: #0a57f4;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 1px 1px #4c4c4c;
            line-height: 30px;
        }

        .retinodes_tagline {
            font-size: 26px;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 1px 1px #4c4c4c;
        }

        .header_logo_box {
            position: absolute;
            left: 30px;
            text-align: center;
            top: 5px;
        }

        .header_logo {
            width: 55px;
            height: 55px;
            overflow: hidden;
            position: relative;
            line-height: 60px;
        }

        .header_logo:before, .header_logo:after {
            content: "";
            border-radius: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .header_logo:before {
            box-shadow: inset 0 5.5px 0 rgb(255, 255, 255), inset 5.5px 0 0 rgb(255, 255, 255), inset 0 -5.5px 0 rgb(255, 255, 255), inset -5.5px 0 0 rgb(255, 255, 255);
            -webkit-animation: rotarIz 2s -0.5s linear infinite;
            animation: rotarIz 2s -0.5s linear infinite;
        }

        .header_logo:after {
            box-shadow: inset 0 5.5px 0 rgba(10, 87, 244, 0), inset 5.5px 0 0 rgba(10, 87, 244, 0.35), inset 0 -5.5px 0 rgba(10, 87, 244, 0), inset -5.5px 0 0 rgba(10, 87, 244, 0.29);
            -webkit-animation: rotar 2s -0.5s linear infinite;
            animation: rotar 2s -0.5s linear infinite;
        }
        .header_logo img {
            width: 100%;
            max-width: 25px;
        }
        .services_block
        {
            width: 100%;
            padding: 50px 0px;
            min-height: 80vh;
        }
        .heading_animation {
            color: #fff;
            text-transform: uppercase;
            text-align: center;
        }
        .heading_animation span {
            font-size: 72px;
            font-family: 'Raleway', sans-serif;
            letter-spacing: 1px;
            font-weight: 900;
            display: inline-block;
            animation: move 4.5s ease-in-out infinite;

        }
        .heading_animation span:nth-child(2) {
            animation-delay: 0.5s;
        }
        .heading_animation span:nth-child(3) {
            animation-delay: 1s;
        }
        .heading_animation span:nth-child(4) {
            animation-delay: 1.5s;
        }
        .heading_animation span:nth-child(5) {
            animation-delay: 2s;
        }
        .heading_animation span:nth-child(6) {
            animation-delay: 2.5s;
        }
        .heading_animation span:nth-child(7) {
            animation-delay: 3s;
        }
        .heading_animation span:nth-child(8) {
            animation-delay: 3.5s;
        }
        .heading_animation span:nth-child(9) {
            animation-delay: 4s;
        }
        @keyframes move {
            0% { transform: translate(-0%, 0); }
            50% {  color:#ffffff; text-shadow: 0 0 25px rgba(0, 0, 0, 0.15);  }
            100% { transform: translate(0%, 0);}
        /*color: #0a57f473;*/
        }
    </style>
</head>
<body>
<div id="loading_page" class="loader_main">
    <div class="loading-center">
        <div class="loader">
            <div class="cube">
                <div class="sides">
                    <div class="top"></div>
                    <div class="right"></div>
                    <div class="bottom"></div>
                    <div class="left"></div>
                    <div class="front"></div>
                    <div class="back"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="top_navigation">
    <div class="header_logo_box">
        <div class="header_logo">
            <img src="img/Retinodes-r-logo-white.png" alt="Retinodes logo">
        </div>
    </div>
    <div class="right_navigation">
        <div class="right_menu_box" onclick="ShowMenu();">
            <span class="menu_first"></span>
            <span class="menu_second"></span>
            <span class="menu_third"></span>
        </div>
        <div class="get_quotebox">
            <a class="menu_getquote">Get Quote</a>
        </div>
        <ul class="header_menu_ul list-unstyled" id="menu_nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Career</a></li>
        </ul>
    </div>
</nav>
<section class="home_banner" id="home_banner">
    
    <div class="banner_logo_text">
        <div class="banner_logobox">
            <img src="img/Retinodes-r-logo-white.png" alt="Retinodes logo">
            <div class="com_name">
                <span>R</span>
                <span>E</span>
                <span>T</span>
                <span>I</span>
                <span>N</span>
                <span>O</span>
                <span>D</span>
                <span>E</span>
                <span>S</span>
            </div>
            <div class="com_last">Software Solutions</div>
            <div class="retinodes_tagline">Following Dreams</div>
        </div>
    </div>
</section>
<section class="services_block">
    <div class="container">
        <div class="heading_animation words-1">
            <span>R</span>
            <span>E</span>
            <span>T</span>
            <span>I</span>
            <span>N</span>
            <span>O</span>
            <span>D</span>
            <span>E</span>
            <span>S</span>
        </div>
    </div>
</section>
<?php include_once("master/footer.php") ?>
<script type="text/javascript">
    $(document).ready(function () {
        //$('#our_expert_slider').carousel();
        //$('#testomonial_slider').carousel();
        $('#home_banner').mousemove(function (e) {
            var amountMovedX = (e.pageX * -1 / 30);
            var amountMovedY = (e.pageY * -1 / 30);
            $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
        });
    });
    function ShowMenu() {
        var chkmenu_nav = $('#menu_nav').attr('class');
        if (chkmenu_nav == "header_menu_ul list-unstyled") {
            $('#menu_nav').addClass('top_menu_show');
        } else {
            $('#menu_nav').removeClass('top_menu_show');
        }
    }
    window.onload = function (e) {
        setTimeout(function () {
            $('#loading_page').fadeOut();
        }, 1000);
    }
</script>
</body>
</html>
