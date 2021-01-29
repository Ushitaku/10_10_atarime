<?php
session_start();
include("functions.php");
check_session_id();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>お買い上げ</title>
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">お買い上げありがとうございました！</h1>
        <div class="content_box scroll-fade">
            <div class="buy">
                <img src="img/atarime_02.png" alt="">
                <h2>食べたら感想教えてね。</h2>
                <button class="button" type="submit" onclick="location.href='login_index.php'">トップへ戻る</button>
            </div>
        </div>
    </div>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>