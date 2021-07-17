<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>3-1認識北極星</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 2150px;
                background: rgba(0,0,0,.2); 
                background-repeat:repeat-x;
                background-attachment:fixed;
            }
            
            body{
                background: url("images/home3.jpg");
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
            }

            /*內文*/
            .lesson-wrap{
                height: 1900px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .picH450 {
                display: flex;
                padding: 25px 60px 0px;
                justify-content: space-around;
                height: 450px;
                margin: 0px 0px 20px;
            }
            .lesson-wrap .picH450 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH450 img:hover{
                transform: scale(1.03);
            }
            .lesson-wrap .picH157 {
                display: flex;
                padding: 0px 60px 0px;
                justify-content: space-around;
                height: 157px;
                margin: 0px 0px 20px;
            }
            .lesson-wrap .picH157 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH157 img:hover{
                transform: scale(1.03);
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
                    <li class="nav-link"><a href="lesson31.php">3-1 認識北極星</a></li>
                    <li class="nav-link"><a href="lesson32.php">3-2 尋找北極星</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Home -->
        <div id="home">
            <div class="backimg-gray">
                <div class="lesson-wrap">
                    <header>3-1 認識北極星</header>
                    <p>藉由星座盤可以觀察到星座會隨著時間、月分而改變位置，所有的星星都是如此嗎？試試看，將星座盤轉到同一天晚上的不同時間，以及不同日期的相同時間，並仔細觀察北方天空的星星移動情形，說一說，你有什麼發現呢？</p>
                    
                    <div class="title">同一天不同時間</div>
                    <div class="picH450">
                        <img src="images/img31/311.jpg" alt="同一天不同時間" title="同一天不同時間">
                    </div>
                    <div class="picH157">
                        <img src="images/img31/313.jpg" alt="對話">
                    </div>
                    
                    <div class="title">不同日期相同時間</div>
                    <div class="picH450">
                        <img src="images/img31/312.jpg" alt="不同日期相同時間" title="不同日期相同時間">
                    </div>
                    <div class="picH157">
                        <img src="images/img31/313.jpg" alt="對話">
                    </div>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson25.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson32.php"><div class="rightBtn"></div></a></button>
                    </div>
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