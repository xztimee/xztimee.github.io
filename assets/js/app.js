function copyToClipboard(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
  }

$('.menu-item').on('click', function(e) {
    // Hiá»‡u á»©ng menu
    $('.menu-item').removeClass('active');
    $(this).addClass('active');

    // Hiá»‡u á»©ng light / dark mode
    let darkMode = $(this).data('dark');
    if (!!darkMode) {
        $('body').removeClass('light');
    } else {
        $('body').addClass('light');
    }

    // Chuyá»ƒn content
    let selector = $(this).data('content');
    $('.main-content').removeClass('active');
    $('.' + selector).addClass('active');

    // TrÆ°á»£t scrollbar tá»›i vá»‹ trĂ­ nĂºt áº¥n
    let itemX = $(this).position().left;
    $('.menu').animate({
        scrollLeft: itemX
    })
});

$('.list-item__open').on('click', function(e) {
    let href = $(this).data('href');
    window.open(href, '_blank');
});

$('.payment-account__copy, .list-item__copy').on('click', function(e) {
    let text = $(this).data('text');
    copyToClipboard(text);
    $('.copy').addClass('active');
    $('.copy-backdrop').addClass('active');
});

$('.copy-close').on('click', function(e) {
    $('.copy').removeClass('active');
    $('.copy-backdrop').removeClass('active');

});

$('.payment-form').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        url: '/',
        type: 'POST',
        data: {
            qr: true,
            amount: $('.payment-form__money').val()
        },
        success: (response) => {
            $('#payment-account__bank').text(response.bank);
            $('#payment-account__stk').text(response.stk);
            $('#payment-account__ctk').text(response.ctk);
            $('#payment-account__amount').text(response.amount + 'Ä');
            $('.payment-account__qr').attr('src', `data:image/png;base64,${response.qr}`);

            $('#copy-stk').data('text', response.stk);
            $('#copy-amount').data('text', response.amount);

            $('.payment-account').addClass('active');
        }
    })

});

console.log('Contact for work: ka402.weed@gmail.com!!');
console.log(`
 /$$   /$$  /$$$$$$   /$$$$$$  /$$   /$$  /$$$$$$ 
| $$  | $$ /$$__  $$ /$$__  $$| $$$ | $$ /$$__  $$
| $$  | $$| $$  \ $$| $$  \ $$| $$$$| $$| $$  \__/
| $$$$$$$$| $$  | $$| $$$$$$$$| $$ $$ $$| $$ /$$$$
| $$__  $$| $$  | $$| $$__  $$| $$  $$$$| $$|_  $$
| $$  | $$| $$  | $$| $$  | $$| $$\  $$$| $$  \ $$
| $$  | $$|  $$$$$$/| $$  | $$| $$ \  $$|  $$$$$$/
|__/  |__/ \______/ |__/  |__/|__/  \__/ \______/ 

`);