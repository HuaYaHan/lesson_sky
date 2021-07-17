<?php
session_start();
require_once "db.php";

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
?>