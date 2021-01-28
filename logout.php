<?php
session_start();
$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
} // クッキーの保持期限を過去にする
session_destroy(); // セッションの破棄
header('Location:index.php'); // ログインページヘ移動
exit();
