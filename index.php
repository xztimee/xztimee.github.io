<?php
require_once './bank.php';

$username = 'ntvh';
if (isset($_GET['profile'])) {
    $username = $_GET['profile'];
}

$profileFn = './profiles/' . $username . '.php';
if (file_exists($profileFn)) {
    require_once $profileFn;
} else {
    header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link rel="icon" href="assets/img/5.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/light.css">
    <script src="vendors/jquery/jquery-3.7.0.min.js"></script>
    <script language="JavaScript">
    window.onload = function() {
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function(e) {
            //document.onkeydown = function(e) {
            // "I" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            // "J" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            // "S" key + macOS
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            // "U" key
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            // "F12" key
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);

        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    };
</script>
    <style>
        body {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
    </style>
    <script type=”text/JavaScript”>
        function killCopy(e){ 
            return false } 
        function reEnable(){ 
            return true } 
        document.onselectstart = new Function (“return false”) 
        
        if (window.sidebar){  
            document.onmousedown=killCopy 
            document.onclick=reEnable 
        }
    </script>
    <div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
	<div class="wheel"></div>
	<div class="hamster">
		<div class="hamster__body">
			<div class="hamster__head">
				<div class="hamster__ear"></div>
				<div class="hamster__eye"></div>
				<div class="hamster__nose"></div>
			</div>
			<div class="hamster__limb hamster__limb--fr"></div>
			<div class="hamster__limb hamster__limb--fl"></div>
			<div class="hamster__limb hamster__limb--br"></div>
			<div class="hamster__limb hamster__limb--bl"></div>
			<div class="hamster__tail"></div>
		</div>
	</div>
	<div class="spoke"></div>
</div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js'/>
<script type='text/javascript'>
checkCtrl=false $('*').keydown(function(e){
if(e.keyCode=='17'){ checkCtrl=false  } }).keyup(function(ev){
if(ev.keyCode=='17'){ checkCtrl=false } }).keydown(function(event){
if(checkCtrl){
if(event.keyCode=='85'){ return false; } } })
</script><script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href=""}),shortcut.add("F12",function(){top.location.href=""}),shortcut.add("Ctrl+Shift+I",function(){top.location.href=""}),shortcut.add("Ctrl+S",function(){top.location.href=""}),shortcut.add("Ctrl+Shift+C",function(){top.location.href=""});
//]]>
</script>
</head>
<body class="light">
    <div class="container">
        <div class="header">
            <div class="avatar-box">
                <img src="assets/img/avatar/ntvh.png" alt="" class="avatar">
            </div>
            <div class="info-box">
                <div class="name-box">
                    <span class="name">Trương Quốc Toàn</span>
                    <img src="assets/img/icons/verified-verificado.gif" alt="" class="tick">
                </div>
                <div class="skills">
                                            <span class="skill">Developer</span>
                                            <span class="skill">Sus</span>
                                        <!-- <span class="skill">Developer</span>
                    <span class="skill">Designer</span> -->
                </div>
            </div>
        </div>
        <div class="body">
            <ul class="menu">
                <li class="menu-item active" data-content="socials" data-dark="false">
                    <img src="assets/img/icons/social.svg" alt="" class="menu-item__icon">
                    <span class="menu-item__title">Social Media</span>
                </li>
                <li class="menu-item" data-content="banks" data-dark="true">
                    <img src="assets/img/icons/payment.svg" alt="" class="menu-item__icon">
                    <span class="menu-item__title">Payment</span>
                </li>
                <li class="menu-item" data-content="projects" data-dark="false">
                    <img src="assets/img/icons/code.svg" alt="" class="menu-item__icon">
                    <span class="menu-item__title">My Project</span>
                </li>
            </ul>
            <div class="main-content banks">
                <form action="" class="payment-form">
                    <div class="payment-form__title">
                        <img src="assets/img/icons/qrcode.svg" alt="">
                        <span>CHuyển tiền nhanh bằng QR Code</span>
                    </div>
                    <div class="payment-form__input-icons">
                        <img src="assets/img/icons/coin.svg" alt="" class="payment-form__input-icon">
                        <input type="text" class="payment-form__money" placeholder="Nhập số tiền cần chuyển">
                    </div>
                    <button type="submit" class="payment-form__transfer">Tạo qr code</button>
                </form>
                <div class="payment-account">
                    <div class="payment-account__left">
                        <img src="assets/img/qr-sample.png" alt="" class="payment-account__qr">
                    </div>
                    <div class="payment-account__right">
                        <p class="payment-account__text">Ngân hàng: <span id="payment-account__bank"></span></p>
                        <p class="payment-account__text">CTK: <span id="payment-account__ctk"></span></p>
                        <div class="payment-account__row">
                            <span class="text-gradient">STK:</span>
                            <span id="payment-account__stk"></span>
                            <button class="payment-account__copy" id="copy-stk" data-text="">
                                <img src="assets/img/icons/copy.svg" alt="">
                            </button>
                        </div>
                        <div class="payment-account__row">
                            <span class="text-gradient">Số tiền:</span>
                            <span id="payment-account__amount">1.000VND</span>
                            <button class="payment-account__copy" id="copy-amount" data-text="">
                                <img src="assets/img/icons/copy.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="split-bar"></div>
                <h2 class="content-title">Số tài khoản</h2>
                <ul class="list banks-list">
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/tech.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">TECHCOMBANK</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/vcb.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">Vietcombank</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/mb.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">MB Bank</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/momo.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">MOMO</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/zalo.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">ZALO PAY</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                        <li class="bank-item list-item">
                        <div class="list-item__logo_box">
                            <img src="assets/img/bank/bidv.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail">
                            <p class="bank-item__bank">BIDV</p>
                            <p class="bank-item__stk">STK: XXXXXXXXXXXX</p>
                            <p class="bank-item__ctk">CTK: Trương Quốc Toàn</p>
                        </div>
                        <button class="list-item__copy list-item__btn" data-text="XXXXXXXXXXXX">Sao chép</button>
                    </li>
                                    </ul>
            </div>
            <div class="main-content socials active">
                <h2 class="content-header">Các mạng xã hội của Toàn</h2>
                <ul class="list socials-list">
                                        <li class="list-item social-item">
                        <div class="list-item__logo_box social-item__logo_box">
                            <img src="assets/img/social/fb.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail social-item__detail">
                            <p class="social-item__network">Facebook</p>
                            <p class="social-item__username">@blablabla</p>
                        </div>
                        <button class="list-item__btn list-item__open" data-href="https://www.facebook.com/">Open</button>
                    </li>
                                        <li class="list-item social-item">
                        <div class="list-item__logo_box social-item__logo_box">
                            <img src="assets/img/social/zalo.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail social-item__detail">
                            <p class="social-item__network">Zalo</p>
                            <p class="social-item__username">@0123456789</p>
                        </div>
                        <button class="list-item__btn list-item__open" data-href="https://zalo.me/XXXXXXXXXXXX">Open</button>
                    </li>
                                        <li class="list-item social-item">
                        <div class="list-item__logo_box social-item__logo_box">
                            <img src="assets/img/social/tele.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail social-item__detail">
                            <p class="social-item__network">TELEGRAM</p>
                            <p class="social-item__username">@blablabla</p>
                        </div>
                        <button class="list-item__btn list-item__open" data-href="https://t.me/">Open</button>
                    </li>
                                        <li class="list-item social-item">
                        <div class="list-item__logo_box social-item__logo_box">
                            <img src="assets/img/social/ins.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail social-item__detail">
                            <p class="social-item__network">INSTAGRAM</p>
                            <p class="social-item__username">@</p>
                        </div>
                        <button class="list-item__btn list-item__open" data-href="https://instagram.com/">Open</button>
                    </li>
                                    </ul>
            </div>
            <div class="main-content projects">
                <h2 class="content-header">Các dự án của Toàn</h2>
                <ul class="list projects-list">
                                        <li class="list-item social-item">
                        <div class="list-item__logo_box social-item__logo_box">
                            <img src="assets/img/project/sech.png" alt="" class="list-item__logo">
                        </div>
                        <div class="list-item__detail social-item__detail">
                            <p class="project-item__name">PrivateIOS</p>
                            <p class="project-item__desc">Cheating PUBG super safe</p>
                        </div>
                        <button class="list-item__btn list-item__open" data-href="https://telegram.org">Open</button>
                    </li>
                                    </ul>
            </div>
        </div>
        <div class="copy-backdrop">
            <div class="copy">
                <div class="copy-title">Sao chép thành công</div>
                <button class="copy-close">Đóng</button>
            </div>
        </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>

</html>