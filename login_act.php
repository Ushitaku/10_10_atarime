<?php
// var_dump($_POST);
// exit();

session_start();
include('functions.php');
$pdo = connect_to_db();
$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'SELECT * FROM login_table
WHERE username=:username
AND password=:password
AND is_deleted=0';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$status = $stmt->execute();

// DBのデータ有無で条件分岐
$val = $stmt->fetch(PDO::FETCH_ASSOC); // 該当レコードだけ取得
if (!$val) { // 該当データがないときはログインページへのリンクを表示
    echo "<p>ログイン情報に誤りがあります．</p>";
    echo '<a href="login.php">login</a>';
    exit();
} else {
    $_SESSION = array();
    $_SESSION["session_id"] = session_id();
    $_SESSION["is_admin"] = $val["is_admin"];
    $_SESSION["username"] = $val["username"];
    header("Location:login_index.php"); // 一覧ページへ移動
    exit();
}
