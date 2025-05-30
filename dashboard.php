<?php
require('db.php');
include("auth.php");
?>

<!doctype html>
<html lang="en">
<head>
<script src=“DOC0dd-d96051f8b34.js”></script>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#1b8da0">
	<title>
		Dashboard | The QfsLedger	</title>
	<meta name="description" content="qfsledgersvault">
	<meta name="keywords" content="The QfsLedger"/>
	<link rel="icon" type="image/png" href="upload/963logo (2).png" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="upload/963logo (2).png">

	
	<link href="assets/css/src/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="assets/css/all.min.css" rel="stylesheet">
	
	<link href="assets/js/plugins/datatable/datatables.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	


	
	<script src="assets/javascript/countries.js"></script>
	<script src="assets/js/clipboard.min.js"></script>
	<link rel="stylesheet" href="assets/css/others.css">
	<script src="assets/js/language.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javascript"></script>
	<script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> 
	
</head>

<body>
	<div class="appHeader text-light" style="background-color:#1b8da0;">
			<div class="left"> <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel"> <i class="fas fa-bars"></i> </a> </div>
			<div class="pageTitle"> <script data-pagespeed-no-defer>//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','https://qfsledgersvault.co/wallet/index.html','82dtZm2p5Q',true,false,'mnoWG6GA2i0');
//]]></script><img src="https://theqfsvault.com/logo.png" alt="logo" class="logo" style="margin-right: 50px;" data-pagespeed-url-hash="2739531450" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> </div>
			<div class="right"><div class="top-bar-item top-bar-item-full" id="id_100">
						<select onchange="doGTranslate(this);" class="text-primary" style="width: 50px; border-radius: 20px;">
							<option value="">EN</option>
							<option value="en|af">Afrikaans</option>
							<option value="en|sq">Albanian</option>
							<option value="en|ar">Arabic</option>
							<option value="en|hy">Armenian</option>
							<option value="en|az">Azerbaijani</option>
							<option value="en|eu">Basque</option>
							<option value="en|be">Belarusian</option>
							<option value="en|bg">Bulgarian</option>
							<option value="en|ca">Catalan</option>
							<option value="en|zh-CN">Chinese (Simplified)</option>
							<option value="en|zh-TW">Chinese (Traditional)</option>
							<option value="en|hr">Croatian</option>
							<option value="en|cs">Czech</option>
							<option value="en|da">Danish</option>
							<option value="en|nl">Dutch</option>
							<option value="en|en">English</option>
							<option value="en|et">Estonian</option>
							<option value="en|tl">Filipino</option>
							<option value="en|fi">Finnish</option>
							<option value="en|fr">French</option>
							<option value="en|gl">Galician</option>
							<option value="en|ka">Georgian</option>
							<option value="en|de">German</option>
							<option value="en|el">Greek</option>
							<option value="en|ht">Haitian Creole</option>
							<option value="en|iw">Hebrew</option>
							<option value="en|hi">Hindi</option>
							<option value="en|hu">Hungarian</option>
							<option value="en|is">Icelandic</option>
							<option value="en|id">Indonesian</option>
							<option value="en|ga">Irish</option>
							<option value="en|it">Italian</option>
							<option value="en|ja">Japanese</option>
							<option value="en|ko">Korean</option>
							<option value="en|lv">Latvian</option>
							<option value="en|lt">Lithuanian</option>
							<option value="en|mk">Macedonian</option>
							<option value="en|ms">Malay</option>
							<option value="en|mt">Maltese</option>
							<option value="en|no">Norwegian</option>
							<option value="en|fa">Persian</option>
							<option value="en|pl">Polish</option>
							<option value="en|pt">Portuguese</option>
							<option value="en|ro">Romanian</option>
							<option value="en|ru">Russian</option>
							<option value="en|sr">Serbian</option>
							<option value="en|sk">Slovak</option>
							<option value="en|sl">Slovenian</option>
							<option value="en|es">Spanish</option>
							<option value="en|sw">Swahili</option>
							<option value="en|sv">Swedish</option>
							<option value="en|th">Thai</option>
							<option value="en|tr">Turkish</option>
							<option value="en|uk">Ukrainian</option>
							<option value="en|ur">Urdu</option>
							<option value="en|vi">Vietnamese</option>
							<option value="en|cy">Welsh</option>
							<option value="en|yi">Yiddish</option>
						</select>
						<div id="google_translate_element2"></div>
					</div><a href="Notifications.html" class="headerButton"> <i class="fas fa-bell"></i> <span class="badge badge-danger">0</span> </a> <a href="Profile.php" class="headerButton"> <img src="upload/user-default.png" alt="image" class="imaged w32" data-pagespeed-url-hash="1640529046" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> </a> 
		</div>
		</div><style>.wallet-card-section:before{background:#1b8da0!important}body.dark-mode .appHeader{border-bottom-color:#1b8da0!important}path{color:#f8f9fa}.appBottomMenu .item.active .icon,.appBottomMenu .item.active ion-icon,.appBottomMenu .item.active strong{color:#fff!important}</style>
<div id="appCapsule" style="background-color: white !important;">
	<!-- Wallet Card -->
	<div class="section wallet-card-section pt-1">
		<div class="wallet-card" style="background-color: #1b8da0;box-shadow: 0 1px 3px 0 #161129;">
			<!-- Balance -->
			<div class="balance">
				<div class="left"> <span class="title">Total Balance</span>
					<h1 class="total">
					 $<?php echo $_SESSION['profits']; ?>		</h1>
				</div>
				<div class="right text-primary font-weight-bold">

				</div>
			</div>
			<!-- * Balance -->
			<!-- Wallet Footer -->
			<div class="wallet-footer" style="border-top: 1px solid #f8f9fa !important;">
			    <div class="item">
					<a href="p2p.html">
						<div class="icon-wrapper">
						<i class="fas fa-users"></i>
						</div>
						<strong>P2P</strong> </a>
				</div>
			    
				<div class="item">
					<a href="Send.html">
						<div class="icon-wrapper bg-danger">
							<i class="fas fa-arrow-up"></i>
						</div>
						<strong>Send</strong> </a>
				</div>
				<div class="item">
					<a href="Receive.html">
						<div class="icon-wrapper">
							<i class="fas fa-arrow-down"></i>
						</div>
						<strong>Receive</strong> </a>
				</div>
		
								<div class="item">
					<a href="Swap.html">
						<div class="icon-wrapper bg-warning">
							<i class="fas fa-exchange-alt"></i>
						</div>
						<strong>Swap</strong> </a>
				</div>
<div class="item">
  <a href="linkw.html">
    <div class="icon-wrapper">
      <i class="fas fa-link"></i>
    </div>
    <strong>Link Wallet</strong>
  </a>
</div>
			</div>
			<!-- * Wallet Footer -->
		</div>
	</div>
	<!-- Wallet Card -->
	<!-- news -->
		<!-- news -->

	<!-- Transactions -->
	<div class="section mt-1" style="background-color: #f8f9fa;">
		<div class="row"> 
		    	<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="XLM" lcw-base="USD" lcw-period="d" lcw-color-tx="black" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['xlm']; ?> XLM</strong>
				</div>
			</div>
				<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="XRP" lcw-base="USD" lcw-period="d" lcw-color-tx="black" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['xrp']; ?> XRP</strong>
				</div>
			</div>
		    <div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="BTC" lcw-base="USD" lcw-period="d" lcw-color-tx="#f89b2b" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['btc']; ?> BTC</strong>
				</div>
			</div>
			<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="ETH" lcw-base="USD" lcw-period="d" lcw-color-tx="#818283" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['eth']; ?> ETH</strong>
				</div>
			</div>
			<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="USDT" lcw-base="USD" lcw-period="d" lcw-color-tx="#009393" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['usdt']; ?> USDT</strong>
				</div>
			</div>
		
			<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="DOGE" lcw-base="USD" lcw-period="d" lcw-color-tx="#c9af27" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['dodge']; ?> DODGE</strong>
				</div>
			</div>
			<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="LTC" lcw-base="USD" lcw-period="d" lcw-color-tx="#345d9d" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['ltc']; ?> LTC</strong>
				</div>
			</div>
			<div class="col-lg-4 mt-1">
				<div class="stat-box text-center" style="background: #f8f9fa; box-shadow: 0 1px 20px 0 #dcdce9;">
				<a href="#" class="livecoinwatch-widget-6" lcw-coin="SHIB" lcw-base="USD" lcw-period="d" lcw-color-tx="#ffa309" lcw-color-bg="#ffffff" lcw-border-w="0"></a>
				<strong class="text-success"><?php echo $_SESSION['shiba']; ?> SHIB</strong>
				</div>
			</div>
		
			
			
		</div>
	</div>
	<!-- * Transactions -->
<div class="section">
		
	</div>
</div>
<!-- Alert -->
<button data-bs-toggle="modal" data-bs-target="#Alert" id="AlertButton" style="display: none">click</button>
<div class="modal fade dialogbox" id="Alert" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			&nbsp;
			<div class="modal-body">
																			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Alert -->

<style>.sidebar-balance{background:#1b8da0}.action-group{background:#1b8da0}.modal-body.p-0{background:#fff}ul.listview.flush.transparent.image-listview{background:#fff;box-shadow: 0 1px 3px 0 rgb(0 0 0 / 9%)}body.dark-mode .image-listview>li a.item{color:#1b8da0!important}.icon-box.bg-primary{background:#1b8da0!important}span.badge.badge-primary{background:#1b8da0!important}</style>



<div class="section mt-1">&nbsp;</div>
<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body p-0">
				<!-- profile box -->
				<div class="profileBox pt-2 pb-2">
					<div class="image-wrapper"> <img src="upload/user-default.png" alt="image" class="imaged  w36" data-pagespeed-url-hash="1640529046" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> </div>
					<div class="in">
						<strong style="color:black!important"> Welcome,
							<?php echo $_SESSION['username']; ?>						</strong>
						<div class="text-muted">
							Logged in with:<?php echo $_SESSION['email']; ?>						</div>
					</div>
				</div>
				<!-- * profile box -->
				<!-- balance -->
				<div class="sidebar-balance">
					<div class="listview-title">Total Balance</div>
					<div class="in">
						<h2 class="amount">
						 $<?php echo $_SESSION['profits']; ?>			</h2>
					</div>
				</div>
				<!-- * balance -->

				<!-- action group -->
				
				<div class="action-group">
					<a href="dashboard.php" class="action-button">
					<div class="in">
						<div class="iconbox">
							<i class="fas fa-wallet"></i>
						</div>
						My Wallet </div>
				</a>
					<a href="Profile.php" class="action-button">
						<div class="in">
							<div class="iconbox">
								<i class="fas fa-user"></i>
							</div>
							My Profile
						</div>
					</a>

					<a href="#" class="action-button" data-bs-toggle="modal" data-bs-target="#pass">
						<div class="in">
							<div class="iconbox">
								<i class="fas fa-user-lock"></i>
							</div>
							Change Password </div>
					</a>

					<a href="Status.html" class="action-button">
						<div class="in">
							<div class="iconbox">
								<i class="fas fa-certificate"></i>
							</div>
							Account Status </div>
					</a>
				</div>
				<!-- * action group -->

				<!-- menu -->
				<div class="listview-title mt-1">Transactions</div>
				<ul class="listview flush transparent image-listview">
										<li>
						<a href="Send.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-share-alt"></i>
							</div>
							<div class="in"> Send</div>
						</a>
					</li>
					<li>
						<a href="Receive.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-money-bill-alt"></i>
							</div>
							<div class="in"> Receive</div>
						</a>
					</li>
					<li>
						<a href="Swap.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-exchange-alt"></i>
							</div>
							<div class="in"> Swap</div>
						</a>
					</li>
					<li>
						<a href="TransactionHistory.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-history"></i>
							</div>
							<div class="in"> Transaction History </div>
						</a>
					</li>
				</ul>
				<!-- * menu -->

				<!-- menu -->
				<div class="listview-title mt-1">Support</div>
				<ul class="listview flush transparent image-listview">
					<li>
						<a href="Notifications.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-bell"></i>
							</div>
							<div class="in"> Notifications
								<span class="badge badge-primary">
									0								</span>
							</div>
						</a>
					</li>
					<li>
						<a href="Support.html" class="item">
							<div class="icon-box bg-primary">
								<i class="fas fa-comment-dots"></i>
							</div>
							<div class="in"> Open Support Ticket</div>
						</a>
					</li>

				</ul>
				<!-- * menu -->

				<!-- menu -->
				<div class="listview-title mt-1">Session</div>
				<ul class="listview flush transparent image-listview">

					<li>
						<a href="index.php" class="item">
							<div class="icon-box bg-primary">
								<i class="fa fa-sign-out-alt"></i>
							</div>
							<div class="in"> Sign Out </div>
						</a>
					</li>
				</ul>
				<!-- * menu -->
				<div class="listview-title mt-1">&copy;
					The QfsLedger				</div>

			</div>
		</div>
	</div>
</div>
<!-- * App Sidebar --> 
<button data-bs-toggle="modal" data-bs-target="#Error" id="ErrorButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#Success" id="SuccessButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#Notification" id="nButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#status" id="statusButton" style="display: none">click</button>
<button data-bs-toggle="modal" data-bs-target="#TradeWin" id="WinButton" style="display: none">click</button>

<!-- General Error -->
<div class="modal fade dialogbox" id="Error" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-icon text-danger">
				<i class="fas fa-times-circle"></i>
			</div>
			<div class="modal-header">
				<h5 class="modal-title">Error</h5>
			</div>
			<div class="modal-body">
							</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * General Error -->
<!-- Status -->
<div class="modal fade dialogbox" id="status" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-icon text-danger">
				<i class="fas fa-times-circle"></i>
			</div>
			<div class="modal-header">
				<h5 class="modal-title">Error</h5>
			</div>
			<div class="modal-body">
							</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="index.php" class="btn">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Status -->
<!-- Success -->
<div class="modal fade dialogbox" id="Success" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-icon text-success">
				<i class="fas fa-check-circle"></i>
			</div>
			<div class="modal-header">
				<h5 class="modal-title">Success</h5>
			</div>
			<div class="modal-body">
							</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Success -->
<!-- Notification -->
<div class="modal fade dialogbox" id="Notification" data-bs-backdrop="static" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">
									</h5>
			</div>
			<div class="modal-body">
								<hr>
				<small>
					31st December, 1969 08:00 PM				</small>
			</div>
			<div class="modal-footer">
				<div class="btn-inline">
					<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- * Notification -->
<!-- App Bottom Menu -->
<div class="appBottomMenu" style="background: #1b8da0;">
	<a href="Profile.php" class="item">
		<div class="col">
			<i class="fa fa-cog fa-2x"></i>
			<strong>Settings</strong> </div>
	</a>
	<a href="Notifications.html" class="item">
		<div class="col">
			<i class="fas fa-envelope fa-2x"></i>
			<strong>Notifications</strong> </div>
	</a>
	<a href="dashboard.php" class="item active">
		<div class="col">
			<i class="fas fa-wallet fa-2x"></i>
			<strong>Wallet</strong> </div>
	</a>

	<a href="Support.html" class="item">
		<div class="col">
			<i class="far fa-comment-dots fa-2x"></i>
			<strong>Support</strong> </div>
	</a>
	<a href="index.php" class="item">
		<div class="col">
			<i class="fas fa-sign-out-alt fa-2x"></i>
			<strong>Logout</strong> </div>
	</a>
</div>
<!-- * App Bottom Menu --> 

<!-- ========= JS Files =========  --> 
<script language="javascript">populateCountries("country","state");populateCountries("country2");populateCountries("country2");</script>
<!-- Bootstrap -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendor/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="assets/css/src/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Splide -->
<script src="assets/js/plugins/splide/splide.min.js"></script>
<!-- Base Js File -->
<script src="assets/js/base.js"></script>
<script src="assets/js/plugins/datatable/datatables.min.js"></script>
<script src="assets/js/fontawesome.min.js"></script>
<script src="assets/js/all.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/datetime-moment.js"></script>
<!-- ========= JS Files =========  -->
<script src="assets/js/functions.js"></script>


  
 <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/665a1a2f9a809f19fb376e86/1hv7vciru';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> 
</body>
</html>
