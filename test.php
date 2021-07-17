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
                right: 30px;
                bottom: 15px;
                z-index: 500;
            }
            .goTop button{
                border-radius: 100%;
                margin: 10px 0px;
                border: 2px solid rgba(255,255,255,.4); ;
                font-family: sans-serif;
                background-color: transparent;
                color: white;
                width: 50px;
                height: 50px;
                font-size:15px;
                opacity: 1;
                transition: all 0.3s;
            }
            .goTop button:hover{
                background-color: rgba(255,255,255,.2);
            }
            .upBtn{
                margin: 8px 0px 0px 14px;
                width: 17px;
                height: 17px;
                border-top: 5px solid #fff;
                border-right: 5px solid #fff;
                transform: rotate(-45deg);
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
            <button type="button"><a href="#" class="jq-goTop"><div class="upBtn"></div></a></button>
        </div>      
              
        
        <!-- Test -->

        <div class="test">
            <div class="backimg-gray">
                <div class="wrap">
                    <div class="title">課後測驗</div>
                </div>
                <div class="qa1">
                    <h2>1. 我們可以用方位和仰角來表示下列何者在天空中的位置?</h2>
                    <input type="radio" name="a" value="10" id="a0">
                    <label for="a0">太陽</label>
                    <input type="radio" name="a" value="10" id="a1">
                    <label for="a1">星星</label>
                    <input type="radio" name="a" value="10" id="a2">
                    <label for="a2">月亮</label>
                    <input type="radio" name="a" value="10" id="a3">
                    <label for="a3">以上皆是</label>
                </div>
                <div class="qa2">
                    <h2>2. 以下何種情境最適合觀測星星?</h2>
                    <input type="radio" name="b" value="10" id="b0">
                    <label for="b0">晴朗無雲、月亮皎潔的夜晚</label>
                    <input type="radio" name="b" value="10" id="b1">
                    <label for="b1">寒流來襲雲霧壟罩的夜晚</label>
                    <input type="radio" name="b" value="10" id="b2">
                    <label for="b2">晴朗無雲、沒有月亮的夜晚</label>
                    <input type="radio" name="b" value="10" id="b3">
                    <label for="b3">烏雲密佈，雷聲大響的夜晚</label>
                </div>
                <div class="qa1">
                    <h2>3. 就下列選項中，選一個最適合觀測星星的地點？</h2>
                    <input type="radio" name="c" value="10" id="c0">
                    <label for="c0">人來人往的夜市</label>
                    <input type="radio" name="c" value="10" id="c1">
                    <label for="c1">湖邊公園</label>
                    <input type="radio" name="c" value="10" id="c2">
                    <label for="c2">車水馬龍的路邊</label>
                    <input type="radio" name="c" value="10" id="c3">
                    <label for="c3">國小的操場</label>
                </div>
                <div class="qa2">
                    <h2>4. 晚上到戶外觀測星星，下列何者不需要攜帶</h2>
                    <input type="radio" name="d" value="10" id="d0">
                    <label for="d0">指北針</label>
                    <input type="radio" name="d" value="10" id="d1">
                    <label for="d1">手電筒</label>
                    <input type="radio" name="d" value="10" id="d2">
                    <label for="d2">星座盤</label>
                    <input type="radio" name="d" value="10" id="d3">
                    <label for="d3">月亮仰角觀測器</label>
                </div>
                <div class="qa1">
                    <h2>5. 觀察星星下列哪一種資訊無法自星座盤上得知？</h2>
                    <input type="radio" name="e" value="10" id="e0">
                    <label for="e0">星座的名稱</label>
                    <input type="radio" name="e" value="10" id="e1">
                    <label for="e1">星座的仰角</label>
                    <input type="radio" name="e" value="10" id="e2">
                    <label for="e2">星星的目視星等</label>
                    <input type="radio" name="e" value="10" id="e3">
                    <label for="e3">星星與地球之間的距離</label>
                </div>
                <div class="qa2">
                    <h2>6. 北斗七星是中國古代的星名，屬於西洋星座中的哪一星座？</h2>
                    <input type="radio" name="f" value="10" id="f0">
                    <label for="f0">獵戶座</label>
                    <input type="radio" name="f" value="10" id="f1">
                    <label for="f1">天蠍座</label>
                    <input type="radio" name="f" value="10" id="f2">
                    <label for="f2">大熊星座</label>
                    <input type="radio" name="f" value="10" id="f3">
                    <label for="f3">小熊星座</label>
                </div>
                <div class="qa1">
                    <h2>7. 我們要使用星座盤來尋找北斗七星必須面向</h2>
                    <input type="radio" name="g" value="10" id="g0">
                    <label for="g0">東方站立</label>
                    <input type="radio" name="g" value="10" id="g1">
                    <label for="g1">西方站立</label>
                    <input type="radio" name="g" value="10" id="g2">
                    <label for="g2">南方站立</label>
                    <input type="radio" name="g" value="10" id="g3">
                    <label for="g3">北方站立</label>
                </div>
                <div class="qa2">
                    <h2>8. 北斗七星裡的七顆星星彼此之間的距離與位置</h2>
                    <input type="radio" name="h" value="10" id="h0">
                    <label for="h0">隨者觀測的時間改變</label>
                    <input type="radio" name="h" value="10" id="h1">
                    <label for="h1">隨者季節改變</label>
                    <input type="radio" name="h" value="10" id="h2">
                    <label for="h2">固定不變</label>
                    <input type="radio" name="h" value="10" id="h3">
                    <label for="h3">距離太遠無法觀測</label>
                </div>
                <div class="qa1">
                    <h2>9. 北斗七星在天空中移動的情形，下列敘述何者錯誤？</h2>
                    <input type="radio" name="i" value="10" id="i0">
                    <label for="i0">和太陽、月亮移動方向相同</label>
                    <input type="radio" name="i" value="10" id="i1">
                    <label for="i1">由東向西移動</label>
                    <input type="radio" name="i" value="10" id="i2">
                    <label for="i2">繞者北極星移動</label>
                    <input type="radio" name="i" value="10" id="i3">
                    <label for="i3">接近正北方，位置固定幾乎不會移動</label>
                </div>
                <div class="qa2">
                    <h2>10. 下列哪個季節可以利用北斗七星尋找北極星?</h2>
                    <input type="radio" name="j" value="10" id="j0">
                    <label for="j0">春夏季節</label>
                    <input type="radio" name="j" value="10" id="j1">
                    <label for="j1">夏秋季節</label>
                    <input type="radio" name="j" value="10" id="j2">
                    <label for="j2">秋冬季節</label>
                    <input type="radio" name="j" value="10" id="j3">
                    <label for="j3">春夏秋冬，四季均可</label>
                </div>
                <div class="btn">
                    <input type="button" value="提交" onclick="showDiv()">
                </div>
            </div>
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
                
                $(window).scroll(function () {
                    if ($(window).scrollTop() < 400) {
                        $(".goTop").fadeOut();
                    }
                    else{
                        $(".goTop").fadeIn();
                    }
                });
                
                $(".jq-goTop").click(function (e) {
                    e.preventDefault();
                    $("html,body").animate({
                      scrollTop: 0,
                    },600);
                });
            });
            
            //測驗
            const a = document.querySelectorAll('input[name="a"]');
            const b = document.querySelectorAll('input[name="b"]');
            const c = document.querySelectorAll('input[name="c"]');
            const d = document.querySelectorAll('input[name="d"]');
            const e = document.querySelectorAll('input[name="e"]');
            const f = document.querySelectorAll('input[name="f"]');
            const g = document.querySelectorAll('input[name="g"]');
            const h = document.querySelectorAll('input[name="h"]');
            const i = document.querySelectorAll('input[name="i"]');
            const j = document.querySelectorAll('input[name="j"]');
            
            function count(ee){
                let total = 0;
                let t1,t2,t3,t4,t5,t6,t7,t8,t9,t10;
                var q1,q2,q3,q4,q5,q6,q7,q8,q9,q10;
                a.forEach(function(a){
                    if (a.checked && a.id == "a3"){
                        total = total + Number(a.value);
                        q1 = "";
                        t1 = 1;
                    }
                    else if(t1 != 1){
                        q1 = "第1題，";
                        t1 = 0;
                    }
                });
                b.forEach(function(b){
                    if (b.checked && b.id == "b2"){
                        total = total + Number(b.value);
                        q2 = "";
                        t2 = 1;
                    }
                    else if (t2 != 1){
                        q2 = "第2題，";
                        t2 = 0;
                    }
                });
                c.forEach(function(c){
                    if (c.checked && c.id == "c1"){
                        total = total + Number(c.value);
                        q3 ="";
                        t3 = 1;
                    }
                    else if (t3 != 1){
                        q3 = "第3題，";
                        t3 = 0;
                    }
                });
                d.forEach(function(d){
                    if (d.checked && d.id == "d3"){
                        total = total + Number(d.value);
                        q4 = "";
                        t4 = 1;
                    }
                    else if (t4 != 1){
                        q4 = "第4題，";
                        t4 = 0;
                    }
                });
                e.forEach(function(e){
                    if (e.checked && e.id == "e3"){
                        total = total + Number(e.value);
                        q5 = "";
                        t5 = 1;
                    }
                    else if (t5 != 1){
                        q5 = "第5題，";
                        t5 = 0;
                    }
                });
                f.forEach(function(f){
                    if (f.checked && f.id == "f2"){
                        total = total + Number(f.value);
                        q6 = "";
                        t6 = 1;
                    }
                    else if (t6 != 1){
                        q6 = "第6題，";
                        t6 = 0;
                    }
                });
                g.forEach(function(g){
                    if (g.checked && g.id == "g3"){
                        total = total + Number(g.value);
                        q7 = "";
                        t7 = 1;
                    }
                    else if (t7 != 1){
                        q7 = "第7題，";
                        t7 = 0;
                    }
                });
                h.forEach(function(h){
                    if (h.checked && h.id == "h2"){
                        total = total + Number(h.value);
                        q8 = "";
                        t8 = 1;
                    }
                    else if (t8 != 1){
                        q8 = "第8題，";
                        t8 = 0;
                    }
                });
                i.forEach(function(i){
                    if (i.checked && i.id == "i3"){
                        total = total + Number(i.value);
                        q9 = "";
                        t9 = 1;
                    }
                    else if (t9 != 1){
                        q9 = "第9題，";
                        t9 = 0;
                    }
                });
                j.forEach(function(j){
                    if (j.checked && j.id == "j0"){
                        total = total + Number(j.value);
                        q10 = "";
                        t10 = 1;
                    }
                    else if (t10 != 1){
                        q10 = "第10題，";
                        t10 = 0;
                    }
                });
                displayTotal(total);
                displayError(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10);
                if (total != 100){
                    showError();
                }
                else {
                    showDiv();
                    $(".error").hide();
                }
            }
            
            a.forEach(function(a){
                a.addEventListener("change", count);
            });
            b.forEach(function(b){
                b.addEventListener("change", count);
            });
            c.forEach(function(c){
                c.addEventListener("change", count);
            });
            d.forEach(function(d){
                d.addEventListener("change", count);
            });
            e.forEach(function(e){
                e.addEventListener("change", count);
            });
            f.forEach(function(f){
                f.addEventListener("change", count);
            });
            g.forEach(function(g){
                g.addEventListener("change", count);
            });
            h.forEach(function(h){
                h.addEventListener("change", count);
            });
            i.forEach(function(i){
                i.addEventListener("change", count);
            });
            j.forEach(function(j){
                j.addEventListener("change", count);
            });
            
            //顯示總分
            const totalInput = document.querySelector("#total");
            function displayTotal(total) {
                totalInput.value = total + " 分";
            }
            
            //顯示錯誤題號
            const errorInput = document.querySelector("#error");
            function displayError(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10) {
                errorInput.value = q1+q2+q3+q4+q5+q6+q7+q8+q9+q10+"錯誤! 請再試試☺";
            }
            function showError(){
                errorInput.style.display = "block";
                errorInput.scrollIntoView({ behavior: 'smooth' });
            }
            
            const result = document.querySelector(".result");
            function showDiv(){
                result.style.display = "block";
                result.scrollIntoView({ behavior: 'smooth' });
            }
            
        </script>
        
    </body>
    
</html>