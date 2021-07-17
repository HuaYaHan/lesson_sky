<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>2-5一年中星星的運行</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 3658px;
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
                height: 3408px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .pic{
	            height: 400px;
            }
            .lesson-wrap .a1{
                display: inline-block;
                margin: 0px 75px;
                padding: 0px 5px 2px;
                border: 2px solid white;
                background-color: rgba(255,255,255,.35);
                color: rgba(255,255,255,1);
                cursor: pointer;
                transition: all 0.3s;
            }
            .lesson-wrap .a1:hover{
                background-color: rgba(255,255,255,.2);
                font-size: 22px;
            }
            .lesson-wrap .a2{
                display: inline-block;
                margin: 0px 75px;
                padding: 0px 5px 2px;
                border: 2px solid white;
                background-color: rgba(255,255,255,.35);
                color: rgba(255,255,255,1);
                cursor: pointer;
                transition: all 0.3s;
            }
            .lesson-wrap .a2:hover{
                background-color: rgba(255,255,255,.2);
                font-size: 20px;
            }
            .lesson-wrap .a3{
                display: inline-block;
                margin: 0px 75px;
                padding: 0px 5px 2px;
                border: 2px solid white;
                background-color: rgba(255,255,255,.35);
                color: rgba(255,255,255,1);
                cursor: pointer;
                transition: all 0.3s;
            }
            .lesson-wrap .a3:hover{
                background-color: rgba(255,255,255,.2);
                font-size: 20px;
            }
            
            /*答案1*/
            .ans1{
                border-radius: 15px 15px 15px 15px;
                padding: 5px 8px;
                z-index: 100;
                position: fixed;
                margin: 90px 1100px 0px;
                background-color: white;
                font-size: 20px;
                font-weight: 550;
                height: 125px;
                width: 250px;
                opacity: .9;
                display: none;
            }
            .ans1 .title{
                padding: 7px 0px 3px;
	            font-size: 25px;
                border-bottom: 1px solid black;
            }
            .ans1 .content{
	            padding: 5px 0px 0px;
            }
            .ans1 .close{
                position: absolute;
                background-color: black;
                color: white;
                height: 40px;
                width: 40px;
                text-align: center;
                justify-content: center;
                font-size: 30px;
                top: -10px;
                right: -10px;
                cursor: pointer;
                transition: all 0.3s;
            }
            .ans1 .close:hover{
                background-color: rgba(0,0,0,.7);
                transform: scale(1.03);
            }
            /*答案2*/
            .ans2{
                border-radius: 15px 15px 15px 15px;
                padding: 5px 8px;
                z-index: 100;
                position: fixed;
                margin: 240px 1100px 0px;
                background-color: white;
                font-size: 20px;
                font-weight: 550;
                height: 125px;
                width: 250px;
                opacity: .9;
                display: none;
            }
            .ans2 .title{
                padding: 7px 0px 3px;
	            font-size: 25px;
                border-bottom: 1px solid black;
            }
            .ans2 .content{
	            padding: 5px 0px 0px;
            }
            .ans2 .close{
                position: absolute;
                background-color: black;
                color: white;
                height: 40px;
                width: 40px;
                text-align: center;
                justify-content: center;
                font-size: 30px;
                top: -10px;
                right: -10px;
                cursor: pointer;
                transition: all 0.3s;
            }
            .ans2 .close:hover{
                background-color: rgba(0,0,0,.7);
                transform: scale(1.03);
            }
            /*答案3*/
            .ans3{
                border-radius: 15px 15px 15px 15px;
                padding: 5px 8px;
                z-index: 100;
                position: fixed;
                margin: 390px 1100px 0px;
                background-color: white;
                font-size: 20px;
                font-weight: 550;
                height: 125px;
                width: 250px;
                opacity: .9;
                display: none;
            }
            .ans3 .title{
                padding: 7px 0px 3px;
	            font-size: 25px;
                border-bottom: 1px solid black;
            }
            .ans3 .content{
	            padding: 5px 0px 0px;
            }
            .ans3 .close{
                position: absolute;
                background-color: black;
                color: white;
                height: 40px;
                width: 40px;
                text-align: center;
                justify-content: center;
                font-size: 30px;
                top: -10px;
                right: -10px;
                cursor: pointer;
                transition: all 0.3s;
            }
            .ans3 .close:hover{
                background-color: rgba(0,0,0,.7);
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
                
                <div class="ans1">
                    <div class="close">X</div>
                    <div class="title">答案1</div>
                    <div class="content">不一樣。</div>
                </div>
                <div class="ans2">
                    <div class="close">X</div>
                    <div class="title">答案2</div>
                    <div class="content">由東向西移動。</div>
                </div>
                <div class="ans3">
                    <div class="close">X</div>
                    <div class="title">答案3</div>
                    <div class="content">一年。</div>
                </div>
               
                <div class="lesson-wrap">
                    <header>2-5 一年中星星的運行</header>
                    <p>同一天中，星星在天空中的位置會隨著時間而改變。想想看，在不同日期的相同時間觀察星空，同一個星座會出現在一樣的位置嗎？</p>
                    
                    <div class="title">動手做</div>
                    <p>1.挑選一個日期和時間，旋轉星座盤後選定一個星座觀察。例如：2月20日晚上9時，觀察北斗七星（位於大熊座）。</p>
                    <div class="pic">
                        <img src="images/img25/251.jpg" alt="2月20日晚上9時" title="2月20日晚上9時">
                    </div>
                    <br>
                    <p>2.再旋轉星座盤，將日期延後2個月，觀察選定的星座位置。例如：4月20日晚上9時。</p>
                    <div class="pic">
                        <img src="images/img25/252.jpg" alt="4月20日晚上9時" title="4月20日晚上9時">
                    </div>
                    <br>
                    <p>3.再次旋轉星座盤，將日期延後兩個月，觀察選定的星座位置。例如：6月20日晚上9時。</p>
                    <div class="pic">
                        <img src="images/img25/253.jpg" alt="6月20日晚上9時" title="6月20日晚上9時">
                    </div>
                    <br>
                    
                    <div class="title">討論</div>
                    <p>1.不同日期的夜晚，在相同時間所觀察到的星星，它們的位置會一樣嗎？</p>
                    <div class="a1">答案</div>
                    <br>
                    <p>2.隨著觀察月分的改變，星星的位置是如何移動的？</p>
                    <div class="a2">答案</div>
                    <br>
                    <p>3.相同時間、相同的位置上，要等多久才能見到相同的星座呢？</p>
                    <div class="a3">答案</div>
                    
                    <p>星星的位置會隨著時間、日期改變，如果將星星在天空中移動的情形連續拍攝下來，就會形成一道道美麗的星軌。</p>
                    <div class="pic">
                        <img src="images/img25/254.jpg" alt="星軌" title="星軌">
                    </div>
                    <br>
                    
                    <div class="title">影片: 各地夜晚的星空</div>
                    <video controls>
                                <source src="images/img25/2_5.mp4" type="video/mp4">
                    </video>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson24.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson31.php"><div class="rightBtn"></div></a></button>
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
                
                //答案1
                $(".a1").click(function(){
                    $(".ans1").fadeIn();
                })
                $(".ans1 .close").click(function(){
                    $(".ans1").fadeOut();
                })
                //答案2
                $(".a2").click(function(){
                    $(".ans2").fadeIn();
                })
                $(".ans2 .close").click(function(){
                    $(".ans2").fadeOut();
                })
                //答案3
                $(".a3").click(function(){
                    $(".ans3").fadeIn();
                })
                $(".ans3 .close").click(function(){
                    $(".ans3").fadeOut();
                })
            })
        </script>
        
        
    </body>
    
</html>