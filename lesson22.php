<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>2-2四季星空</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 3838px;
                background: rgba(0,0,0,.2); 
                background-repeat:repeat-x;
                background-attachment:fixed;
            }
            
            body{
                background: url("images/home2.jpg");
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
            }

            /*內文*/
            .lesson-wrap{
                height: 3588px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .picH500 {
                display: flex;
                padding: 25px 60px 0px;
                justify-content: space-around;
                height: 500px;
                margin: 0px 0px 20px;
            }
            .lesson-wrap .picH500 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH500 img:hover{
                transform: scale(1.03);
            }
            .lesson-wrap .picH400 {
                display: flex;
                padding: 25px 60px 0px;
                justify-content: space-around;
                height: 400px;
                margin: 0px 0px 20px;
            }
            .lesson-wrap .picH400 img{
                transition: all 0.3s;
            }
            .lesson-wrap .picH400 img:hover{
                transform: scale(1.03);
            }
            .lesson-wrap video {
                display: flex;
                margin: auto;
                padding: 26px 60px 0px;
                width: 750px;
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
                    <li class="nav-link"><a href="lesson21.php">2-1 星座盤操作</a></li>
                    <li class="nav-link"><a href="lesson22.php">2-2 四季星空</a></li>
                    <li class="nav-link"><a href="lesson23.php">2-3 星星的亮度與顏色</a></li>
                    <li class="nav-link"><a href="lesson24.php">2-4 一天中星星的運行</a></li>
                    <li class="nav-link"><a href="lesson25.php">2-5 一年中星星的運行</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Home -->
        <div id="home">
            <div class="backimg-gray">
                <div class="lesson-wrap">
                    <header>2-2 四季星空</header>
                    <p>因為星星的位置會隨著時間移動，所以每天晚上所觀看到的星星，以及它們所在的位置都不大相同，但是滿天星斗，怎樣才能清楚辨認星星呢？ 以冬季的星空為例，在天空中可以清楚觀看到天狼星、南河三、參宿四這三顆較亮的星星，將它們連接起來，剛好形成一個三角形，稱為冬季大三角。找到冬季大三角之後，再搭配星座盤對照實際的星空，就可以找出星星和星座了！</p>
                    <br>
                    <p>不同季節的夜晚，天空中的亮星也不相同，將較亮的星星連起來，形成三角形或四邊形，藉由這樣的方式，讓我們可以更容易辨認天空中的星星。請利用星座盤觀察、比對下圖中的星星，你發現什麼？</p>
                    
                    <div class="title">春季大三角</div>
                    <p>春季大三角是由五帝座一、大角星和角宿一所組成，在三角形的北方可以找到北斗七星。</p>
                    <div class="picH400">
                        <img src="images/img22/221.jpg" alt="春季大三角" title="春季大三角">
                    </div>
                    
                    <div class="title">夏季大三角</div>
                    <p>夏季大三角是由天津四、牛郎星和織女星所組成。</p>
                    <div class="picH400">
                        <img src="images/img22/222.jpg" alt="夏季大三角" title="夏季大三角">
                    </div>
                    
                    <div class="title">秋季大三角</div>
                    <p>秋季四邊形是由室宿一、室宿二、壁宿一和壁宿二所組成。</p>
                    <div class="picH400">
                        <img src="images/img22/223.jpg" alt="秋季大三角" title="秋季大三角">
                    </div>
                    
                    <div class="title">冬季大三角</div>
                    <p>冬季大三角的南方為大犬座，東方則為小犬座。在三角形的西方可以看到排成一列的三顆星星，就是獵戶座的腰帶，藉此可以辨認出獵戶座。</p>
                    <div class="picH500">
                        <img src="images/img22/224.jpg" alt="冬季大三角" title="冬季大三角">
                    </div>
                    
                    <div class="title">影片: 認識四季星空</div>
                    <video controls>
                                <source src="images/img22/2_2.mp4" type="video/mp4">
                    </video>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson21.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson23.php"><div class="rightBtn"></div></a></button>
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