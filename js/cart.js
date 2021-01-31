// マイナスを押すと数量が変わる処理
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

// プラスを押すと数量が変わる処理
$('.plus-btn').on('click', function (e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());

    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }

    $input.val(value);
});
// ここまで

// プラスマイナスを押すと金額が反映される処理
var quant = 350;  //金額格納用
// var value = $('#value').val();

$('.plus-btn').click(function () {
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());
    quant += 350;
    console.log(value);
    $('#total').html(quant); //金額を反映
    if (value === 3) {
        quant = 1000;
        $('#total').html(quant);
        $('#first-child').fadeIn();
    }
});

$('.minus-btn').click(function () {
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    let value = parseInt($input.val());
    if (value = 0) {
        quant = 0;
    } else {
        quant -= 350;
    }
    $('#total').html(quant); //金額を反映
});

