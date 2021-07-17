<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>3-2尋找北極星</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 2960px;
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
                height: 2710px;
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
            .lesson-wrap .picH380 {
                display: flex;
                padding: 25px 60px 0px;
                justify-content: space-around;
                height: 380px;
                margin: 0px;
            }
            .lesson-wrap .picH380 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH380 img:hover{
                transform: scale(1.03);
            }
            .lesson-wrap .picH350 {
                display: flex;
                padding: 25px 60px 0px;
                justify-content: space-around;
                height: 350px;
                margin: 0px 0px 20px;
            }
            .lesson-wrap .picH350 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH350 img:hover{
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
                    <header>3-2 尋找北極星</header>
                    <p>北極星在北方天空，幾乎不會隨著時間改變位置，所以可以利用北極星來辨認方位，但北極星並不是一顆很亮的星，因此要利用其他星星來尋找。</p>
                    
                    <div class="title">春、夏季節利用北斗七星尋找北極星</div>
                    <p>1. 找到北斗七星。<br>2. 連接杓口的兩顆星，從第2顆星往第1顆星的方向畫一條延長線。<br>3. 從杓口第1顆星出發，將延長線延長大約第1、2顆星距離的五倍，就可以找到北極星。<br>P.S.在春、夏季節的夜晚，比較容易找到北斗七星，所以可以利用它來尋找北極星哦!</p>
                    <div class="picH450">
                        <img src="images/img32/321.jpg" alt="3月1日晚上9時星空" title="3月1日晚上9時星空">
                    </div>
                    <p>注意: 在秋、冬季節的夜晚，有時候會看不到北斗七星，這時我們就利用仙后座來尋找北極星。</p>
                    <br>
                    
                    <div class="title">秋、冬季節利用仙后座尋找北極星</div>
                    <div class="picH380">
                        <img src="images/img32/322.jpg" alt="圖1" title="圖1">
                        <img src="images/img32/323.jpg" alt="圖2" title="圖2">
                    </div>
                    <div class="picH380">
                        <img src="images/img32/324.jpg" alt="圖3" title="圖3">
                        <img src="images/img32/325.jpg" alt="圖4" title="圖4">
                    </div>
                    <p>1. 找到仙后座，連接第1、2顆星，並往第2顆星的方向畫一條延長線（如圖1）。<br>2. 連接第4、5顆星，並往第4顆星的方向畫一條延長線（如圖2）。<br>3. 將兩條延長線的交點ㄅ和第3顆星連接， 並往第3顆星的方向畫一條延長線（如圖3）。<br>4. 從第3顆星出發，將延長線延長大約為ㄅ和第3顆星距離的五倍， 就可以找到北極星（如圖4）。</p>
                    <br>
                    <div class="picH350">
                        <img src="images/img32/326.jpg" alt="11月1日晚上9時" title="11月1日晚上9時">
                        <img src="images/img32/327.jpg" alt="北斗七星、仙后座和北極星的相對位置示意圖" title="北斗七星、仙后座和北極星的相對位置示意圖">
                    </div>
                    <p>利用晴朗的夜晚，和大人一起到戶外實際觀賞星星、尋找北極星吧！。</p>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson31.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="index.php"><div class="rightBtn"></div></a></button>
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
                
                //註釋
                $("span").click(function(){
                    $(".note").fadeIn();
                })
                $(".close").click(function(){
                    $(".note").fadeOut();
                })
            })
        </script>
        
        
    </body>
    
</html>