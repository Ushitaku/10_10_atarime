<?php
// まずはこれ
// var_dump($_GET);
// exit();
// 関数ファイルの読み込み
session_start();
include('functions.php');
check_session_id();

// GETデータ取得
$user_id = $_GET['user_id'];
$login_id = $_GET['login_id'];
// DB接続
$pdo = connect_to_db();

// いいね状態のチェック（COUNTで件数を取得できる！）
$sql = 'SELECT COUNT(*) FROM like_table
WHERE user_id=:user_id AND login_id=:login_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':login_id', $login_id, PDO::PARAM_INT);
$status = $stmt->execute();
if ($status == false) {
    // エラー処理
} else {
    $like_count = $stmt->fetch();
    // var_dump($like_count[0]); // データの件数を確認しよう！
    // exit();
}

// いいねしていれば削除，していなければ追加のSQLを作成
if ($like_count[0] != 0) {
    $sql = 'DELETE FROM like_table
WHERE user_id=:user_id AND login_id=:login_id';
} else {
    $sql = 'INSERT INTO like_table(id, user_id, login_id, created_at)
VALUES(NULL, :user_id, :login_id, sysdate())';
}
// INSERTのSQLは前項で使用したものと同じ！
// 以降（SQL実行部分と一覧画面への移動）は変更なし！
// SQL文は1行にまとめる


// いいねデータ取得
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':login_id', $login_id, PDO::PARAM_INT);
$status = $stmt->execute(); // SQL実行
if ($status == false) {
    // エラー処理
} else {
    header('Location:index.php');
}
