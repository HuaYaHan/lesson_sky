<?php
session_start();
session_unset();
$_SESSION['is_login'] = false;
header('Location: ../index0.php');
?>