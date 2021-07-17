<?php
session_start();
require_once "php/db.php";

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
    header('Location: index0.php');
}
?>

<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>璀璨的星空</title>
        
        <!-- CSS -->
        <style>
            /*選單*/
            .nav-container{
                background-color: rgba(0,0,0,.0); 
                border-bottom: 5px solid rgba(0,0,0,.0);
            }
            .nav-list {
                top: 0;
            }
            .nav-list.open {
                top: 0;
            }
            .nav-link{
                top: 55px;
            }
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 640px;
                background: rgba(0,0,0,.4); 
            }
            
            /*首頁*/
            .home-container {
                background: BLACK url("images/home.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
                animation: fadein 5s ease;
            }
            
            .home-container p {
                position: relative;
                margin: auto;
                height: 640px;
                font-size: 120px;
                letter-spacing: 8px;
                color: white;
                padding: 270px 0px 0px;
            }
            
            /*第一章目錄*/
            .one-container{
                background: BLACK url("images/home1.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .one-container .wrap{
                position: relative;
                background: rgba(0,0,0,.4); 
                margin: auto;
                top: 110px;
                height: 430px;
                width: 75%;
            }
            .one-container .wrap .title{
                padding: 60px 0px 5px;
                color: white;
                font-size: 30px;
                font-weight: 550;
            }
            .one-container .wrap .list{
                padding: 0px 0px 53px;
                font-family: system-ui;
                color: white;
                opacity: .7;
            }
            
            /*第二章目錄*/
            .two-container{
                background: BLACK url("images/home2.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .two-container .wrap{
                position: relative;
                background: rgba(0,0,0,.4); 
                margin: auto;
                top: 75px;
                height: 500px;
                width: 75%;
            }
            .two-container .wrap .title{
                padding: 35px 0px 5px;
                color: white;
                font-size: 30px;
                font-weight: 550;
            }
            .two-container .wrap .list{
                padding: 0px 0px 35px;
                font-family: system-ui;
                color: white;
                opacity: .7;
            }
            
            /*第三章目錄*/
            .three-container{
                background: BLACK url("images/home3.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .three-container .wrap{
                position: relative;
                background: rgba(0,0,0,.4); 
                margin: auto;
                top: 110px;
                height: 430px;
                width: 75%;
            }
            .three-container .wrap .title{
                padding: 60px 0px 5px;
                color: white;
                font-size: 30px;
                font-weight: 550;
            }
            .three-container .wrap .list{
                padding: 0px 0px 53px;
                font-family: system-ui;
                color: white;
                opacity: .7;
            }
            
            /*試題目錄*/
            .test-container{
                background: BLACK url("images/home4.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .test-container .wrap{
                position: relative;
                background: rgba(0,0,0,.4); 
                margin: auto;
                top: 110px;
                height: 430px;
                width: 75%;
            }
            .test-container .wrap .title{
                padding: 45px 0px 5px;
                color: white;
                font-size: 30px;
                font-weight: 550;
            }
            .test-container .wrap .list{
                padding: 0px 0px 40px;
                font-family: system-ui;
                color: white;
                opacity: .7;
            }
        </style>
    </head>
    
    
    <body>
        <!-- Nav -->
        <div class="nav-container">
            <nav>
                <a href="index.php" class="title1">國小五(下)</a>
                <a href="index.php" class="title2">自然與生活科技</a>
                <div class="menu">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
                <ul class="nav-list">
                    <li class="nav-link"><a href="index.php">首頁</a></li>
                    <li class="nav-link"><a href="lesson11.php">L1 - 星星與星座</a></li>
                    <li class="nav-link"><a href="lesson21.php">L2 - 利用星座盤觀測星星</a></li>
                    <li class="nav-link"><a href="lesson31.php">L3 - 尋找北極星</a></li>
                    <li class="nav-link"><a href="test.php">課後測驗</a></li>
                    <li class="nav-link"><a href="source.php">資料來源</a></li>
                    <li class="nav-link"><a href="php/logout.php">登出</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Home -->
        <section id="home">
            <div class="home-container">
                <div class="backimg-gray">
                    <p>璀璨的星空</p>
				</div>
            </div>
        </section>
        
        <!-- One -->
        <section id="one">
            <div class="one-container">
                <div class="backimg-gray">
                    <div class="wrap">
                        <p class="title">星星與星座</p>
                        <p class="list">Lesson 1</p>
                        <p class="list">1-1 天上的星星(介紹星體)</p>
                        <p class="list">1-2 星座故事</p>
                        <button type="button"><a href="lesson11.php">LEARN MORE</a></button>
                    </div>
				</div>
            </div>
        </section>
        
        <!-- Two -->
        <section id="two">
            <div class="two-container">
                <div class="backimg-gray">
                    <div class="wrap">
                        <p class="title">利用星座盤觀測星星</p>
                        <p class="list">Lesson 2</p>
                        <p class="list">2-1星座盤操作</p>
                        <p class="list">2-2四季星空</p>
                        <p class="list">2-3星星的亮度與顏色</p>
                        <p class="list">2-4一天中星星的運行</p>
                        <p class="list">2-5一年中星星的運行</p>
                        <button type="button"><a href="lesson21.php">LEARN MORE</a></button>
                    </div>
				</div>
            </div>
        </section>
        
        <!-- Three -->
        <section id="three">
            <div class="three-container">
                <div class="backimg-gray">
                    <div class="wrap">
                        <p class="title">尋找北極星</p>
                        <p class="list">Lesson 3</p>
                        <p class="list">3-1認識北極星</p>
                        <p class="list">3-2尋找北極星</p>
                        <button type="button"><a href="lesson31.php">LEARN MORE</a></button>
                    </div>
				</div>
            </div>
        </section>
        
        <!-- Test -->
        <section id="test">
            <div class="test-container">
                <div class="backimg-gray">
                    <div class="wrap">
                        <p class="title">課後測驗</p>
                        <p class="list">Test</p>
                        <p class="list">星星與星座</p>
                        <p class="list">利用星座盤觀測星星</p>
                        <p class="list">尋找北極星</p>
                        <button type="button"><a href="test.php">LEARN MORE</a></button>
                    </div>
				</div>
            </div>
        </section>
        
        <div class="footer">&copy; copyright <?php echo date("Y");?> by HuaYa</div>
        
        
        
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript"> 
            $(document).ready(function(){
                //選單開關
                $(".menu").click(function(){
                    $(".nav-list").toggleClass("open");
                    $(".menu").toggleClass("change");
                });
            });
        </script>
        
    </body>
    
</html>