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
                height: 1750px;
                background: rgba(0,0,0,.2); 
                background-repeat:repeat-x;
                background-attachment:fixed;
            }
            
            body{
                background: url("images/home1.jpg");
                background-repeat:repeat-x;
                background-attachment:fixed;
                background-position: center ;
                background-size: cover;
            }

            /*內文*/
            .lesson-wrap{
                height: 1500px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .pic{
	            height: 300px;
            }
            .lesson-wrap span{
                margin: 0px 5px;
                padding: 0px 5px 2px;
                border: 2px solid white;
                background-color: rgba(255,255,255,.35);
                color: rgba(255,255,255,1);
                cursor: pointer;
                transition: all 0.3s;
            }
            .lesson-wrap span:hover{
                background-color: rgba(255,255,255,.2);
                font-size: 22px;
            }
            
            /*註解*/
            .note{
                border-radius: 15px 15px 15px 15px;
                padding: 5px 8px;
                z-index: 100;
                position: fixed;
                margin: 90px 900px 0px;
                background-color: white;
                font-size: 20px;
                font-weight: 550;
                height: 150px;
                width: 450px;
                opacity: .8;
                display: none;
            }
            .note .title{
                padding: 7px 0px 3px;
	            font-size: 25px;
                border-bottom: 1px solid black;
            }
            .note .content{
	            padding: 5px 0px 0px;
            }
            .note .close{
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
            .note .close:hover{
                background-color: rgba(0,0,0,.7);
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
                    <li class="nav-link"><a href="lesson11.php">1-1 天上的星星(介紹星體)</a></li>
                    <li class="nav-link"><a href="lesson12.php">1-2 星座故事</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Home -->
        <div id="home">
            <div class="backimg-gray">
                <div class="note">
                    <div class="close">X</div>
                    <div class="title">註釋1</div>
                    <div class="content">街上的路燈和車燈以及招牌的燈光、明亮的月光等，都可能影響我們觀察星星，而這些造成影響的亮光，就稱為光害。</div>
                </div>
                <div class="lesson-wrap">
                    <header>1-1 天上的星星(介紹星體)</header>
                    <p>晴朗的夜空滿天星星，你曾經仔細觀察過天上的星星嗎？它們有哪些特別的地方呢？</p>
                    
                    <div class="title">觀賞星星</div>
                    <p>你們知道嗎? 選擇空曠、光害<span>(註釋1)</span>較少且安全的地方，可以更清楚觀察到美麗的星空哦!
                    大部分的星星和太陽一樣，是會發光、發熱的星球。從地球上觀看星空，會發現星星有的亮、有的暗，顏色也不太相同。</p>
                    
                    <div class="title">恆星</div>
                    <p>太陽和織女星這類會自己發光、發熱的星體稱之為恆星。</p>
                    <div class="pic">
                        <img src="images/L1-1.jpg" alt="太陽" title="太陽">
                    </div>
                    <div class="pic-name">
                        <p>太陽</p>
                    </div>
                    
                    <div class="title">行星</div>
                    <p>自己不會發光、發熱，且繞著恆星運轉的星體稱為行星，如繞著太陽運轉的地球、金星、水星等。</p>
                    <div class="pic">
                        <img src="images/L1-2.jpg" alt="金星" title="金星">
                        <img src="images/L1-3.jpg" alt="地球" title="地球">
                        <img src="images/L1-4.jpg" alt="水星" title="水星">
                    </div>
                    <div class="pic-name">
                        <p>金星</p>
                        <p>地球</p>
                        <p>水星</p>
                    </div>
                    
                    <div class="btn">
                        <button type="button"><a href="index.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson12.php"><div class="rightBtn"></div></a></button>
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