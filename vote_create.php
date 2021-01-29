<?php
// まずはこれ
// var_dump($_GET);
// exit();
// 関数ファイルの読み込み
session_start();
include('functions.php');
check_session_id();

// GETデータ取得
$product_id = $_GET['id'];
$username = $_SESSION['username'];
// DB接続
$pdo = connect_to_db();

// いいね状態のチェック（COUNTで件数を取得できる！）
$sql = 'INSERT INTO vote_table(id, product_id, username, created_at) 
VALUES(NULL, :product_id, :username, sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$status = $stmt->execute();
if ($status == false) {
    // エラー処理
} else {
    header('Location:vote.php');
}
