<?php
require_once "php/db.php";

if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
    echo "<script>alert('請先登入後再進行測驗!'); location.href='login.php';</script>";
}
?>

<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>課後測驗</title>
        
        <!-- CSS -->
        <style>

            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 4038px;
                background: rgba(0,0,0,.2); 
            }
            
            .test{
                background: BLACK url("images/home4.jpg") ;
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
                align-items: center;
                text-align: center;
            }
            .test .wrap{
                position: relative;
                background: #141414; 
                margin: auto;
                height: 138px;
                width: 100%;
                animation: fadein 2.5s ease;
            }
            .test .wrap .title{
                padding: 60px 0px 0px;
                color: white;
                font-size: 50px;
                font-weight: 550;
                letter-spacing: 5px;
            }            
            .test .qa1{
                display: flex;
                flex-direction: column;
                position: relative;
                background: #333D41; 
                margin: auto;
                align-items: center;
                text-align: center;
                height: 380px;
                width: 100%;
                animation: fadein 2.5s ease;
            }
            .test .qa2{
                display: flex;
                flex-direction: column;
                position: relative;
                background: #141414; 
                margin: auto;
                align-items: center;
                text-align: center;
                height: 380px;
                width: 100%;
                animation: fadein 2.5s ease;
            }
            h2 {
                color: white;
                margin: 40px 0px 23px;
            }
            label {
                background: white;
                width:60%;
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
                cursor: pointer;
                transition: .3s;
                font-weight: 600;
                color: #2D2D2D;
            }
            input[type= "radio"] {
                display: none;
            }
            input[type= "radio"]:checked + label {
    		    background-color: #4C8DC6;
                border: 3px solid white;
                color: white;
            }
            .btn{
                display: flex;
                flex-direction: column;
                position: relative;
                background: #141414; 
                margin: auto;
                align-items: center;
                text-align: center;
                height: 100px;
                width: 100%;
                animation: fadein 2.5s ease;
            }
            /*提交紐*/
            input[type = "button"] {
                border: 0;
                background: #4C8DC6;
                display: block;
                margin: auto;
                text-align: center;
                padding: 10px;
                width: 60%;
                outline: none;
                color: white;
                font-size: 20px;
                font-weight: 600;
                border-radius: 8px;
                transition: 0.25s;
                cursor: pointer;
            }
            input[type = "button"]:hover {
                width: 63%;
            }
            /*分數*/
            .result{
                display: none;
                height: 100%;
            }
            .score{
                background-color: #333D41;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .result p{
                color: white;
                margin: 25px 0px 0px;
                font-size: 40px;
                font-weight: 550;
            }
            input[type = "text"] {
                margin: 2% auto;
                text-align: center;
                border: 4px solid white;
                padding: 10px 3px;
                width: 200px;
                font-size: 30px;
                font-weight: 550;
                outline: none;
                color: white;
                border-radius: 100px;
            }
            .error input[type = "text"]{
                display: none;
                margin: 0px 0px 25px;
                text-align: center;
                border: 0px solid white;
                padding: 10px 3px;
                width: 700px;
                font-size: 15px;
                font-weight: 550;
                outline: none;
                color: white;
                border-radius: 100px;
            }
            /*回到最上按鈕*/
            .goTop {
                position: fixed;
                right: 10px;
                bottom: 10px;
            }
            .goTopBtn {
                background-color: transparent;
                border: none;
                outline: none;
                cursor: pointer;
            }
            .fa-arrow-alt-circle-up {
                color: #3d82ad;
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
                </ul>
            </nav>
        </div>  
        
        <!-- GoTop -->
        <div class="goTop">
          <a href="#" class="goTopBtn jq-goTop">
            按鈕!!!!!!!!!!!!!!!
          </a>
        </div>      
              
        

        
        
        <!-- Result -->
        <div class="result">
            <div class="score">
                <p>本次測驗成績 : </p>
                <input type="text" id="total" disabled="disabled" value="0 分">
                <div class="error">
                    <input type="text" id="error" disabled="disabled">
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
                });
                
                $(".jq-goTop").click(function (e) {
                    e.preventDefault();
                    $("html,body").animate({
                      scrollTop: 0,
                    },600);
                });
            });
            
        </script>
        
    </body>
    
</html>