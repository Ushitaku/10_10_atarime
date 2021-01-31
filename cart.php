<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>購入画面</title>

    <link rel="stylesheet" href="css/cart_style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://code.jquery.com/jquery-2.2.4.js" charset="utf-8"></script>
    <meta name="robots" content="noindex,follow" />
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">購入画面</h1>
        <div class="content_box shopping-cart scroll-fade">
            <!-- Title -->
            <div class="title">
                カート一覧
            </div>

            <!-- Product #1 -->
            <div class="item">
                <div class="buttons">
                    <span class="delete-btn"></span>
                    <span class="like-btn"></span>
                </div>

                <div class="image">
                    <img src="img/atarime_cart.png" alt="" />
                </div>

                <div class="description">
                    <span>にじみ出る旨み あたりめ</span>
                </div>

                <div class="quantity">
                    <button class="plus-btn" type="button" name="button">
                        <img src="img/plus.svg" alt="" />
                    </button>
                    <input id="value" type="text" name="name" value="1">
                    <button class="minus-btn" type="button" name="button">
                        <img src="img/minus.svg" alt="" />
                    </button>
                </div>

                <div id="total-price" class="total-price">単価350円</div>
            </div>
            <div class="total-wrapper">
                <div class="total-text">
                    <ul>
                        <li class="first-child">複数購入お値引き</li>
                        <li>合計金額:</li>
                        <li id="total" class="total">350</li>
                        <li>円</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <button class="button" type="submit" onclick="location.href='buy.php'">購入する</button>

    <script type="text/javascript" src="js/cart.js"></script>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>