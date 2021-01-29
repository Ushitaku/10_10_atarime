<?php
session_start();
include("functions.php");
check_session_id();
// DB接続必須！！！！
$pdo = connect_to_db();
$sql = 'SELECT * FROM product_table LEFT OUTER JOIN (SELECT product_id,COUNT(id) AS cnt 
FROM vote_table GROUP BY product_id) AS votes ON product_table.id = votes.product_id';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    // fetchAll()関数でSQLで取得したレコードを配列で取得できる
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
}
// var_dump($result);
// exit();


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>投票完了</title>
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">投票ありがとうございました！</h1>
        <h1 class="scroll-fade">投票結果</h1>
        <div class="content_box scroll-fade">
            <div class="buy">
                <img src="img/atarime_03.png" alt="">
                <div><?php echo $result[0]["cnt"] ?>票</div>
                <h2>にじみ出る旨みあたりめ</h2>
            </div>
            <div class="buy">
                <img src="img/kakinotane.png" alt="">
                <div><?php echo $result[1]["cnt"] ?>票</div>
                <h2>柿の種わさび味</h2>
            </div>
            <div class="buy">
                <img src="img/cheese.png" alt="">
                <div><?php echo $result[2]["cnt"] ?>票</div>
                <h2>チーズあられ</h2>
            </div>
            <div class="buy">
                <img src="img/aji.png" alt="">
                <div><?php echo $result[3]["cnt"] ?>票</div>
                <h2>香ばしい焼きあじ</h2>
            </div>
        </div>
        <button class="button" type="submit" onclick="location.href='login_index.php'">トップへ戻る</button>
    </div>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>