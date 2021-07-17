<?php
session_start();
require_once "php/db.php";

if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
    header('Location: source.php');
}
?>

<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>1-1天上的星星(介紹星體)</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 615px;
                background: rgba(0,0,0,.2); 
                background-repeat:repeat-x;
                background-attachment:fixed;
            }
            
            body{
                background: url("images/source.jpg");
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
            }

            /*內文*/
            .source{
                position: relative;
                background: rgba(0,0,0,.5); 
                margin: auto;
                top: 125px;
                width: 30%;
                height: 425px;
                animation: fadein 2.5s ease;
            }
            .source p{
                background: rgba(0,0,0,.8); 
                padding: 0px 25px;
                border-bottom: 2px solid rgba(0,0,0,.8);
                font-family: system-ui;
                color: white;
                font-size: 28px;
                font-weight: 550;
                line-height: 2;
            }
            .source a{
                display: inline-block; 
                padding: 8px 50px;
                border-bottom: 2px solid rgba(0,0,0,.8);
                width: 100%;
                font-family: system-ui;
                color: white;
                font-size: 28px;
                font-weight: 550;
                line-height: 2;
                transition: all 0.3s ease-out;
            }
            .source a:hover {
                background-color: rgba(0,0,0,.6);
                transition: all 0.3s ease-out;
            }
            .source .last{
                background: rgba(0,0,0,.8); 
                border-bottom: 15px solid rgba(0,0,0,.8);
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
                    <li class="nav-link"><a href="login.php">登入 / 註冊</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Source -->
        <div class="backimg-gray">
            <div class="source">
                <p>課程內容 : </p>
                <a href="http://gallery.mjes.ntpc.edu.tw/moodle/course/view.php?id=340">翰林出版</a>
                <p>圖片來源 : </p>
                <a href="https://unsplash.com/">Unsplash</a>
                <a href="https://www.hippopx.com/">Hippopx</a>
                <a href="https://pixabay.com/">Pixabay</a>
                <div class="last"></div>
            </div>
        </div>
        
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