<?php
session_start();
require_once "db.php";

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

//檢查兩次密碼是否一致
if($pw1 != $pw2){
    echo '<script>alert("兩次密碼不一致，請重新填寫。"); location.href="../signup.php"</script>';
}
else{
    $check2 = 1;
}

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

?>