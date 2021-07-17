# 國小五(下) 自然與生活科技課程網頁
將國小五年級下的自然與生活科技課程內容製作成網頁版。


---

# 網站首頁
![網站首頁](https://i.imgur.com/8KBl8s5.jpg)



網站首頁以動畫浮現:
```css
/*淡入*/
@keyframes fadein {
    0% {opacity: 0;}
    100% {opacity: 1;}
}
```
下滑可看見各章節的標題與目錄，點擊【LEARN MORE】按鈕可進入該章節課程頁面。

![第一章](https://i.imgur.com/HCf3mSS.jpg)
![第二章](https://i.imgur.com/N4121Ab.jpg)
![第三章](https://i.imgur.com/NU6cEO6.jpg)
![測驗](https://i.imgur.com/wHzj583.jpg)



## 選單
右上角為隱藏式選單，用 JQuery 和 CSS 實現:
```javascript
$(document).ready(function(){
    $(".menu").click(function(){
        $(".nav-list").toggleClass("open");//選單開關
        $(".menu").toggleClass("change");//選單按鈕圖形改變
    });
});
```
```css
/*預設隱藏選單*/
.nav-list {
    display: flex;
    list-style: none;
    justify-content: start;
    text-align: left;
    position: fixed;
    top: 55px;
    left: 350px;
    background: rgba(0,0,0,.8);
    width: 100%;
    height: 100%;
    flex-direction: column;
    clip-path: polygon(82% 0%, 100% 0%, 100% 100%, 82% 100%);
    transition: all 0.5s ease-out;
}
/*開啟選單*/
.nav-list.open {
    left: 0px;
    transition: all 0.5s ease-out;
}
```
以下為選單展開後的畫面:

![選單](https://i.imgur.com/f72FSLa.jpg)


---

# 課程頁面
課程內容畫面如下圖:

![課程頁面](https://i.imgur.com/WdUrUoZ.jpg)


在每個章節的最下面會有【上一章】和【下一章】按鈕，如下圖，增加章節跳換的便利性。

![上下章按鈕](https://i.imgur.com/BVH63Lq.jpg)


## 討論題目
有些課程內容在最後會有討論題目，答案為隱藏狀態，當按下【答案】按鈕時，才會顯示出來，答案的隱藏和顯示用 Jquery 來實現。

* 預設狀態，答案按鈕尚未被點擊:

![討論題目](https://i.imgur.com/5r4xZDU.jpg)


* 答案分別被點擊時，顯示答案框:

![答案被點擊後](https://i.imgur.com/jQPwLuC.jpg)


* JQuery:
```javascript
//當答案按鈕被點擊時，答案框fadeIn
$(".a1").click(function(){
    $(".ans1").fadeIn();
});
//當答案框上的叉被點擊時，答案框fadeOut
$(".ans1 .close").click(function(){
    $(".ans1").fadeOut();
});
```


---

# 註冊
學生註冊帳號並登入後，即可進行課後測驗。註冊帳號時必須填寫: 帳號、密碼、姓名，如下圖。

![註冊頁面](https://i.imgur.com/TrBof1K.jpg)



註冊資料以表單方式處理，資料填寫完畢並點擊【註冊】按鈕後，表單數據會提交到 php 資料夾中的 "addUser.php" 頁面:
```html
<form class="box" id="login_form" action="php/addUser.php" method="post">
    <input type="text" name="username" id="username" placeholder="請輸入帳號" required>
    <input type="password" name="password1" id="password1" placeholder="請輸入密碼" required>
    <input type="password" name="password2" id="password2" placeholder="請再次輸入密碼" required>
    <input type="text" name="name" id="name" placeholder="請輸入姓名" required>
    <input type="submit" name="" value="註冊">
</form>
```

* 當使用者填寫的帳號已有人使用，則跳出警示視窗(如下圖)，並返回註冊頁面。
![帳號重複警示](https://i.imgur.com/JYJP6Xz.png)


```php=
$un = $_POST['username'];
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];
$name = $_POST['name'];
$check1 = 0;
$check2 = 0;

//檢查帳號是否已被使用
$sql1 = "SELECT `username` FROM `user`";
$result1 = mysqli_query($_SESSION['link'],$sql1);
$checkUN = @mysqli_fetch_row($result1);

if($un != null && $checkUN[0] == $un){
    echo '<script>alert("此帳號已有人使用，請重新填寫。"); location.href="../signup.php"</script>';
}
else{
    $check1 = 1;
}
```

* 當使用者兩次填寫的密碼不同時，一樣跳出警示視窗(如下圖)，並返回註冊頁面。
![兩次密碼錯誤](https://i.imgur.com/oTdX9nD.png)

```php=
//檢查兩次密碼是否一致
if($pw1 != $pw2){
    echo '<script>alert("兩次密碼不一致，請重新填寫。"); location.href="../signup.php"</script>';
}
else{
    $check2 = 1;
}
```

* 若帳號密碼皆無錯誤，則將使用者的資料寫入資料庫中，並直接切換為登入狀態，跳往首頁。
![註冊成功](https://i.imgur.com/9YRLFV3.png)
```php=
//資訊填寫無誤，將使用者資料添加進資料庫
if($check1 == 1 && $check2 == 1){
    $pw = md5($pw1);  //密碼加密
    $sql2 = "INSERT INTO `user` (`username`, `password`, `name`) VALUE ('{$un}', '{$pw}', '{$name}')";
    $result2 = mysqli_query($_SESSION['link'], $sql2);

    if ($result2){
        //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
        if(mysqli_affected_rows($_SESSION['link']) == 1){
            $_SESSION['is_login'] = true;
            $_SESSION['username'] = $un;
            echo '<script>alert("註冊成功! 已直接登入!"); location.href="../index.php";</script>';
        }
    }
    else{
        echo "{$sql2} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }
}
```


---

# 登入
帳號註冊完成後可隨時登入，登入頁面如下。

![登入頁面](https://i.imgur.com/oTWvRi8.jpg)

登入資料一樣以表單方式處理，帳號密碼填寫完畢後點擊【登入】按鈕，表單數據會提交到 php 資料夾中的 "checkUser.php" 頁面，檢測帳號密碼是否正確:
```htmlmixed=
<form class="box" id="login_form" action="php/checkUser.php" method="post">
    <input type="text" name="username" id="username" placeholder="請輸入帳號" required>
    <input type="password" name="password" id="password" placeholder="請輸入密碼" required>
    <input type="submit" name="" value="登入">
</form>
```

* 若帳號或密碼填寫有誤，則跳出警示視窗，並跳回登入頁面。
![登入錯誤](https://i.imgur.com/JOD0NFw.png)

* 登入成功後則直接跳回首頁。

```php=
$un = $_POST['username'];
$pw = $_POST['password'];
$pw = md5($pw);  //密碼加密

$sql = "SELECT * FROM `user` where `username` = '$un'";
$result = mysqli_query($_SESSION['link'],$sql);
$row = @mysqli_fetch_row($result);

if($un != null && $pw != null && $row[1] == $un && $row[2] == $pw){
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['is_login'] = true;
    $_SESSION['username'] = $un;
    //echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>';
}
else{
    $_SESSION['is_login'] = false;
    echo '<script>alert("登入錯誤!請確認帳號密碼是否正確。"); location.href="../login.php";</script>';
}
```


---
# 課後測驗
要進入課後測驗前，必須先登入，若尚未登入就直接進入課後測驗頁面的話，會跳出警示視窗，並將頁面跳換至登入頁面。
![尚未登入](https://i.imgur.com/YCrRJ5R.png)

在課後測驗頁面中寫入 PHP ，驗證使用者是否已登入:
```php=
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
    echo "<script>alert('請先登入後再進行測驗!'); location.href='login.php';</script>";
}
```

登入成功後則直接進入課後測驗頁面，如下圖。

![課後測驗頁面](https://i.imgur.com/roj46rW.png)

作答完點擊【提交】按鈕，滑出作答成績，並列出錯誤的題號。

![成績](https://i.imgur.com/j58jWHF.png)

* 【提交】按鈕HTML:
```htmlmixed=
<input type="button" value="提交" onclick="showDiv()">
```
* JQuery顯示成績欄位:
```javascript=
const result = document.querySelector(".result");
function showDiv(){
    result.style.display = "block";
    result.scrollIntoView({ behavior: 'smooth' });
}
```

右下角有一個【GoTop】的按鈕，點擊後可直接上滑至網頁頂點，增加使用者在作答和修改答案時的便利性，用 JQuery 實現:
```javascript=
//回到頂點
$(".jq-goTop").click(function (e) {
    e.preventDefault();
    $("html,body").animate({
        scrollTop: 0,
    },600);
});
```
使用 scroll 函式，如果瀏覽器下滑超過 400px ，【GoTop】按鈕才會顯示，否則隱藏。
```javascript=
$(window).scroll(function () {
    if ($(window).scrollTop() < 400) {
        //按鈕隱藏
        $(".goTop").fadeOut();
    }
    else{
        //按鈕顯現
        $(".goTop").fadeIn();
    }
 });
```


---
# 資料來源

資料來源頁面，放了課程內容和圖片來源的網頁連結。

![資料來源頁面](https://i.imgur.com/pssTXbS.jpg)

# 登出

打開選單後點擊【登出】按鈕後，即可登出帳號，並返回首頁。

![登出](https://i.imgur.com/XUnc5sN.jpg)

使用 PHP 完成登出:
```php=
<?php
session_start();
session_unset();
//登出
$_SESSION['is_login'] = false;
header('Location: ../index0.php');
?>
```

# 登入前後選單差異

在登入前和登入後，選單會有變化 : 登入前選單會有【登入/註冊】按鈕，而登入後會變成【登出】按鈕，如下圖所示。

![登入前/登入後](https://i.imgur.com/SEGexgy.png)



* index0.php : 登入前的目錄狀態。
* index.php  : 登入後的目錄狀態。

使用 PHP 來判斷是否登入，若使用者已登入，則自動跳換至 "index.php" 畫面; 若未登入，則跳至 "index.php"。

"index0.php" PHP:
```php=
<?php
session_start();
require_once "php/db.php";

//若已登入，跳至index.php頁面
if(isset($_SESSION['is_login']) && $_SESSION['is_login']){
    header('Location: index.php');
}
?>
```

"index.php" PHP:
```php=
<?php
session_start();
require_once "php/db.php";

//若尚未登入，強制跳至index0.php頁面
if(!isset($_SESSION['is_login']) || !$_SESSION['is_login']){
    header('Location: index0.php');
}
?>
```