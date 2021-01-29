// プラスマイナスを押すと数量が変わる処理
$('.minus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value > 1) {
        value = value - 1;
    } else {
        value = 0;
    }

    $input.val(value);

});

$('.plus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }

    $input.val(value);
});
// ここまで

// プラスマイナスを押すと金額が反映される処理
var quant = 0;  //金額格納用

$('.plus-btn').click(function () {
    quant += 350;
    $('#total').html(quant); //金額を反映
});

$('.minus-btn').click(function () {
    quant -= 350;
    $('#total').html(quant); //金額を反映
    // if (quant < 0) {
    //     quant === 0;
    // }
});