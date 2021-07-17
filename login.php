<?php
session_start();
require_once "php/db.php";

if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
    header('Location: index.php');
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

            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 640px;
                background: rgba(0,0,0,.4); 
            }
            
            .login{
                background: BLACK url("images/login.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .login .wrap{
                position: relative;
                background: rgba(0,0,0,.8); 
                margin: auto;
                top: 160px;
                height: 380px;
                width: 30%;
                animation: fadein 2.5s ease;
            }
            .login .wrap .title{
                padding: 43px 0px 0px;
                color: white;
                font-size: 50px;
                font-weight: 550;
            }
            
            /*Box*/
            .box input[type = "text"],
            .box input[type = "password"] {
                background: #EAF0F4;
                display: block;
                margin: 7% auto;
                text-align: center;
                border: 3px solid gray;
                padding: 10px 3px;
                width: 75%;
                outline: none;
                color: #4A4A4A;
                border-radius: 8px;
                transition: 0.25s;
            }
            .box input[type = "text"]:focus ,
            .box input[type = "password"]:focus {
                width: 80%;
                border-color: #6D6D6D;
            }
            .box input[type = "submit"] {
                border: 0;
                background: #6D6D6D;
                display: block;
                margin: 7% auto;
                text-align: center;
                padding: 10px 3px;
                width: 75%;
                outline: none;
                color: white;
                font-weight: 550;
                border-radius: 8px;
                transition: 0.25s;
                cursor: pointer;
            }
            .box input[type = "submit"]:hover {
                width: 80%;
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
                    <li class="nav-link"><a href="signup.php">註冊</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Login -->

        <div class="login">
            <div class="backimg-gray">
                <div class="wrap">
                    <div class="title">LOGIN</div>
                    <form class="box" id="login_form" action="php/checkUser.php" method="post">
                        <input type="text" name="username" id="username" placeholder="請輸入帳號" required>
                        <input type="password" name="password" id="password" placeholder="請輸入密碼" required>
                        <input type="submit" name="" value="登入">
                    </form>
                </div>
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
                })
            })
        </script>
        
    </body>
    
</html>