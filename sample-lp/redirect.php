<?php 

$name = $_GET['name'];
$mobile = $_GET['mobile'];
$message = $_GET['message'];

$browser = $_SERVER['HTTP_USER_AGENT'];
$chrome = '/Chrome/';
$firefox = '/Firefox/';
$ie = '/MSIE/';
$url = "whatsapp://send?phone=";
$s = "&";
if (preg_match($chrome, $browser)){
	 // echo "Chrome/Opera";
	$url = "https://wa.me/";
	$s = "?";
}
if (preg_match($firefox, $browser)){
	 // echo "Firefox";
	$url = "https://wa.me/";
	$s = "?";
}
if (preg_match($ie, $browser)){
	 // echo "Ie";
	$url = "https://wa.me/";
	$s = "?";
}

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0">

	<noscript>
		<img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=464254887541664&ev=PageView&noscript=1"
		/>
	</noscript>
	<title>Chat WhatsApp</title>
	<meta name="robots" content="noindex,nofollow">
	<style type="text/css">
		html,
		body {
			background: #f5f5f5;
			color: #333;
			margin: 0;
			padding: 0
		}

		.wpbisnis-text {
			display: block;
			position: absolute;
			top: 50%;
			left: 0;
			width: 100%;
			margin: 0 0;
			font-size: 14px;
			font-family: sans-serif;
			text-align: center
		}

		.wpbisnis-loading-text {
			max-width: 600px;
			margin: 0 auto;
			padding: 0 20px;
		}

		.wpbisnis-phone {
			padding: 10px 0;
			vertical-align: middle;
			font-size: 20px;
			line-height: 23px;
		}

		.wpbisnis-phone a {
			text-decoration: none;
			color: #333;
		}

		.wpbisnis-phone img {
			width: 23px;
			height: 23px;
			vertical-align: middle;
		}

		.wpbisnis-button {
			padding: 10px 0;
		}

		.wpbisnis-button a {
			border-radius: 5px;
			padding: 10px 17px;
			font-size: 13px;
			line-height: 19px;
			display: inline-block;
			background-color: #25d366;
			color: #fff !important;
			text-decoration: none;
			letter-spacing: 1px;
		}

		/* Spinkit https://github.com/tobiasahlin/SpinKit MIT License */

		.spinkit-wave {
			display: block;
			position: absolute;
			top: 50%;
			left: 50%;
			width: 50px;
			height: 40px;
			margin: -65px 0 0 -25px;
			font-size: 10px;
			text-align: center
		}

		.spinkit-wave .spinkit-rect {
			display: block;
			float: left;
			width: 6px;
			height: 50px;
			margin: 0 2px;
			background-color: #e91e63;
			-webkit-animation: spinkit-wave-stretch-delay 1.2s infinite ease-in-out;
			animation: spinkit-wave-stretch-delay 1.2s infinite ease-in-out
		}

		.spinkit-wave .spinkit-rect1 {
			-webkit-animation-delay: -1.2s;
			animation-delay: -1.2s
		}

		.spinkit-wave .spinkit-rect2 {
			-webkit-animation-delay: -1.1s;
			animation-delay: -1.1s
		}

		.spinkit-wave .spinkit-rect3 {
			-webkit-animation-delay: -1s;
			animation-delay: -1s
		}

		.spinkit-wave .spinkit-rect4 {
			-webkit-animation-delay: -.9s;
			animation-delay: -.9s
		}

		.spinkit-wave .spinkit-rect5 {
			-webkit-animation-delay: -.8s;
			animation-delay: -.8s
		}

		@-webkit-keyframes spinkit-wave-stretch-delay {
			0%,
			100%,
			40% {
				-webkit-transform: scaleY(.5);
				transform: scaleY(.5)
			}
			20% {
				-webkit-transform: scaleY(1);
				transform: scaleY(1)
			}
		}

		@keyframes spinkit-wave-stretch-delay {
			0%,
			100%,
			40% {
				-webkit-transform: scaleY(.5);
				transform: scaleY(.5)
			}
			20% {
				-webkit-transform: scaleY(1);
				transform: scaleY(1)
			}
		}
		div.shadow {
			position:absolute;
			max-width:45%;
			max-height:45%;
			top:30%;
			left:50%;
			overflow:visible;
		}
		img.logo {
			position:relative;
			max-width:100%;
			max-height:100%;
			margin-top:-50%;
			margin-left:-50%;
		}
	</style>
	<script type="text/javascript">
		var wrdly = 1000,
		wrrdr = "<?php echo $url.''.$mobile.''.$s; ?>text=<?php echo $message; ?>",
		wrsto = !1;
		setTimeout(function () {
			wrsto = !0
		}, 1);
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1248855938838979');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=1248855938838979&ev=PageView&noscript=1"
	/></noscript>
</head>

<body>
<script>
  fbq('track', 'Purchase', {
    value: 100000,
    currency: 'IDR',
  });
</script>
	<div class="shadow"><img class="logo" src="images/naavagreen.png" /></div>
	<div class="spinkit-wave">
		<div class="spinkit-rect spinkit-rect1"></div>
		<div class="spinkit-rect spinkit-rect2"></div>
		<div class="spinkit-rect spinkit-rect3"></div>
		<div class="spinkit-rect spinkit-rect4"></div>
		<div class="spinkit-rect spinkit-rect5"></div>
	</div>
	<div class="wpbisnis-text">
		<div class="wpbisnis-message">
			<div class="wpbisnis-loading-text">
				Anda akan <strong>segera terhubung</strong> dengan Customer Service kami. Atau Klik tombol di bawah ini untuk untuk langsung membuka chat WhatsApp.
			</div>
		</div>
		<div class="wpbisnis-phone">
			<a href="<?php echo $url.''.$mobile.''.$s; ?>text=<?php echo $message; ?>">
				<img src="data:image/png;base64,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" alt="" /> <?php echo $name; ?>&nbsp;(<?php echo $mobile;?>)
			</a>
		</div>
		<div class="wpbisnis-button">
			<a href="<?php echo $url.''.$mobile.''.$s;?>text=<?php echo $message;?>">
			Chat WhatsApp </a>
		</div>
	</div>
	<script type="text/javascript">
		wrdly > 0 ? document.addEventListener("DOMContentLoaded", function () {
			wrsto ? setTimeout(function () {
				window.location = wrrdr
			}, wrdly) : window.location = wrrdr
		}) : window.location = wrrdr;
	</script>
</body>
</html>