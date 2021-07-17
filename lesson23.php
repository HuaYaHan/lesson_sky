<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>2-3星星的亮度與顏色</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 1728px;
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
                height: 1478px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .pic {
                height: 700px;
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
                    <header>2-3 星星的亮度與顏色</header>
                    <p>發現了嗎？夜晚觀星時，每顆星星看起來的顏色和亮度都不太相同呢！</p>
                    <br><br>
                    <p>古希臘人制定了一套規則來定義星星的目視亮度，最亮的星星為1等星，肉眼能看見的最小亮度為6等星。經過後代天文學家的修正並制定標準，延展出零 星等、負星等。這種以觀察者目視亮度為依據的分法，又稱為「視星等」。</p>
                    <br>
                    <p>除了亮度之外，星星的顏色看起來也會有所差異，主要原因來自於星球表面溫度不同。例如：天狼星、織女星的表面溫度約攝氏一萬多度，看起來是青白色；天蠍座中的心宿二表面溫度約攝氏三千多度，看起來的顏色是紅色的；太陽的表面溫度約攝氏六千多度，看起來是黃色的。</p>
                    
                    <div class="title">常見星星的視星等及顏色</div>
                    <div class="pic">
                        <img src="images/img23/231.jpg" alt="常見星星的視星等及顏色" title="常見星星的視星等及顏色">
                    </div>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson22.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson24.php"><div class="rightBtn"></div></a></button>
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