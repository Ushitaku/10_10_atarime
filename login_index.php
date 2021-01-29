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
    <title>健康であるために</title>
</head>

<body>
    <header class="site-header">
    </header>
    <div class="floating-banner">
        <a href="cart.php">
            <div class="banner">
                <p class="cta">購入はこちら</p>
            </div>
        </a>
    </div>

    <div class="main_layout">
        <ul class="gnav">
            <li class="gnav_menu"><a href="register.php">新規会員登録</a></li>
            <li class="gnav_menu"><a href="login.php">ログイン</a></li>
            <li class="gnav_menu"><a href="logout.php">ログアウト</a></li>
        </ul>
        <div class="main fadein">
            <h1 id="main_text" class="main_text">ずっと、健康的な私でいるために</h1>
        </div>
    </div>

    <div class="content">
        <h1 class="content_title scroll-fade">私はこれで続けられる!</h1>
        <div class="content_box scroll-fade">
            <div class="image_block">
                <img src="img/atarime.png" alt="">
            </div>
            <div class="text_block">
                <h1>みなさまのお墨付き<br>にじみ出る旨みあたりめ</h1>
                <p>お得でタンパク質も豊富！とってもヘルシー！</p>
                <div class="circle_block">
                    <p class="circle">大容量35g</p>
                    <p class="circle">塩分控えめ</p>
                    <p class="circle">ダイエットに最適</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="content_title scroll-fade">みなさまのお墨付きとは？</h1>
        <div class="content_box scroll-fade">
            <div class="image_block2">
                <img src="img/title-mainvisual.png" alt="">
            </div>
            <div class="text_block">
                <h1>厳しい消費者テストを<br>クリアしたこだわり商品</h1>
                <p>二重丸のマークがついた商品はすべて、<br>
                    100人以上*（主に女性）による消費者テストで、<br>
                    80％以上の賛同を得たもののみが商品化されます。</p>
                <div class="circle_block2">
                    <a class="product_link" href="https://www.seiyu.co.jp/pb/mo/honshitsu/" target="_blank" rel="noopener noreferrer">詳しくはこちら</a>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="content_title scroll-fade">こんな方におするめ！</h1>
        <div class="content_box scroll-fade">
            <div class="example_block">
                <h2>ついつい間食しがち…</h2>
                <img class="icon" src="img/Lollipop_Outline.png" alt="">
            </div>
            <div class="example_block">
                <h2>ダイエット中だけど食べたい…</h2>
                <img class="icon" src="img/Fitness_Flatline.png" alt="">
            </div>
            <div class="example_block">
                <h2>糖質制限したいけどお肉は高い…</h2>
                <img class="icon" src="img/Credit Card_Flatline.png" alt="">
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="content_title scroll-fade">今ならお買い得！</h1>
        <div class="content_box scroll-fade">
            <div class="buy">
                <img src="img/atarime_02.png" alt="">
                <h2>通常1個350円のところを3個で1,000円で購入できます！</h2>
                <button class="button" type="submit" onclick="location.href='cart.php'">ご購入はこちらから</button>
            </div>
        </div>
    </div>

    <div class="content">
        <h1 class="content_title scroll-fade">他にもあるよ！オススメお墨付き人気投票！</h1>
        <div class="content_box scroll-fade">
            <div class="buy">
                <img src="img/atarime_03.png" alt="">
                <h2>にじみ出る旨みあたりめ</h2>
                <button class="button" type="submit" onclick="location.href='vote_create.php?id=1'">投票する</button>
            </div>
            <div class="buy">
                <img src="img/kakinotane.png" alt="">
                <h2>柿の種わさび味</h2>
                <button class="button" type="submit" onclick="location.href='vote_create.php?id=2'">投票する</button>
            </div>
            <div class="buy">
                <img src="img/cheese.png" alt="">
                <h2>チーズあられ</h2>
                <button class="button" type="submit" onclick="location.href='vote_create.php?id=3'">投票する</button>
            </div>
            <div class="buy">
                <img src="img/aji.png" alt="">
                <h2>香ばしい焼きあじ</h2>
                <button class="button" type="submit" onclick="location.href='vote_create.php?id=4'">投票する</button>
            </div>
        </div>
    </div>
    <footer>copyright 2021 UshiTaku</footer>
    <!-- フォント・js動き読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>