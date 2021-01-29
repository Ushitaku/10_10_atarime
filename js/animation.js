$(document).ready(function () {
    // ページ読み込み時に実行したい処理
    setTimeout(function () {
        $('#main_text').fadeIn("slow");
    }, 1000);
    setTimeout(function () {
        $('#modal').fadeIn("slow");
    }, 2000);
});

$('#close').click(function () {
    $('#modal').fadeOut();
})

// スクロールするとフェードインするエフェクト
$(window).on('load scroll', function () {

    let box = $('.scroll-fade');
    let animated = 'animated';

    box.each(function () {

        let boxOffset = $(this).offset().top;
        let scrollPos = $(window).scrollTop();
        let wh = $(window).height();

        //画面内のどの位置で処理を実行するかで「100」の値を変更
        if (scrollPos > boxOffset - wh + 600) {
            $(this).addClass(animated);
        }
    });

});