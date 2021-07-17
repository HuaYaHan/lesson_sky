<!DOCTYPE HTML>
<html lang="zh-TW">
    <head>
        <!-- Header -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="css/main.css">
        <title>1-2星座故事</title>
        
        <!-- CSS -->
        <style>
            /*底色加灰*/
            .backimg-gray{
                position: relative;
                margin: auto;
                height: 3500px;
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
                height: 3250px;
                animation: fadein 2.5s ease;
            }
            .lesson-wrap .pic {
                height: 400px;
                justify-content: space-around;
                margin: 0px 0px 20px;
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
                    <li class="nav-link"><a href="lesson11.php">1-1 天上的星星(介紹星體)</a></li>
                    <li class="nav-link"><a href="lesson12.php">1-2 星座故事</a></li>
                </ul>
            </nav>
        </div>        
        
        <!-- Home -->
        <div id="home">
            <div class="backimg-gray">
                <div class="lesson-wrap">
                    <header>1-2 星座故事</header>
                    <p>古時候人們將看起來相鄰的星星用線條連接起來，想像成各種人物、動物或器具等，並予以命名，這就是星座的由來。人們藉由星座可以更方便辨識天空中的星星，後來還為星座編織出許多神話故事。</p>
                    
                    <div class="title">中國的星座故事 -- 參與商</div>
                    <p>中國古代將天空劃分為二十八個星宿，商宿及參宿為其中之一。傳說古時候有一對兄弟，兩人天天吵架，讓他們的父親相當生氣，於是將哥哥派去商丘，負責管理大火星（心宿二星，位於天蠍座），弟弟則調去大夏管理參宿（位於獵戶座），讓他們各居一方。</p>
                    <br><br>
                    <p>夜晚時分，每當參宿從東方升起，商宿早已西沉，兩個星宿不會一起出現在天空中。後來唐朝詩人杜甫也用「人生不相見，動如參與商」作為人生難得相見的寫照。</p>
                    <div class="pic">
                        <img src="images/L1-5.jpg" alt="商宿" title="商宿">
                        <img src="images/L1-6.jpg" alt="參宿" title="參宿">
                    </div>
                    
                    <div class="title">西方的星座故事1 -- 獵戶座和天蠍座</div>
                    <p>在希臘神話中，歐利安是位狂妄自大的獵人，常常自誇天下無敵，天后西拉為了懲罰他，派了蠍子前去挑戰，經過一番激烈打鬥，獵人被蠍子螫傷，最終因劇毒而死亡。天后為了獎勵蠍子，便將牠變成天上的天蠍座，獵人則變成了獵戶座，兩個星座在天空一沉一現，永不相見。</p>
                    <div class="pic">
                        <img src="images/L1-7.jpg" alt="天蠍座" title="天蠍座">
                    </div>
                    
                    <div class="title">西方的星座故事2 -- 大犬座和小犬座</div>
                    <p>歐利安打獵時身邊都會帶著兩隻獵犬，在獵人被蠍子螫死變成天上的星座之後，兩隻獵犬天天對著天空叫個不停，天神被牠們的忠心感動，便將這兩隻獵犬分別變成天上的大犬座和小犬座，在天上伴隨著獵戶座。</p>
                    <div class="pic">
                        <img src="images/L1-8.jpg" alt="獵戶座" title="獵戶座">
                    </div>
                    
                    <div class="title">課後小知識</div>
                    <p>中西方對星座的組合與命名方式不一，直至西元1928年，在國際天文學聯合會中確認了每一個星座的邊界，並於1930年正式對外公告，也就是目前國際通用的88個星座。</p>
                    
                    <div class="title">影片: 星座的由來</div>
                    <video controls>
                                <source src="images/1_2.mp4" type="video/mp4">
                    </video>
                    
                    <div class="btn">
                        <button type="button"><a href="lesson11.php"><div class="leftBtn"></div></a></button>
                        <button type="button"><a href="lesson21.php"><div class="rightBtn"></div></a></button>
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