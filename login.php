<?php
require('db.php');
session_start();
ob_start(); // Start output buffering

// If form submitted, process login
if (isset($_POST['email'])) {
    // Remove backslashes
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    // Checking if user exists in the database
    $query = "SELECT * FROM `users` WHERE email=? AND password=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $profits_value = $row['profits'];
        $last_updated = $row['last_updated'] ?? ''; // Use an empty string if NULL

if (!empty($last_updated)) {
    $last_update_time = strtotime($last_updated);
} else {
    $last_update_time = 0; // Fallback to a default time
}
        $current_time = time();

        // Update profits if more than a day has passed
        if (($current_time - $last_update_time) >= 86400) {
            $updated_profits = $profits_value + ($profits_value * 0.005);
            $update_query = "UPDATE `users` SET profits=?, last_updated=NOW() WHERE email=?";
            $stmt = mysqli_prepare($con, $update_query);
            mysqli_stmt_bind_param($stmt, 'ds', $updated_profits, $email);
            mysqli_stmt_execute($stmt);
            $_SESSION['profits'] = number_format($updated_profits, 2);
        } else {
            $_SESSION['profits'] = number_format($profits_value, 2);
        }

        // Save session variables
        $_SESSION['username'] = $row['username'];
        $_SESSION['xlm'] = $row['xlm'];
        $_SESSION['xrp'] = $row['xrp'];
        $_SESSION['btc'] = $row['btc'];
        $_SESSION['usdt'] = $row['usdt'];
        $_SESSION['shiba'] = $row['shiba'];
        $_SESSION['eth'] = $row['eth'];
        $_SESSION['ltc'] = $row['ltc'];
        $_SESSION['dodge'] = $row['dodge'];
        $_SESSION['trn_date'] = $row['trn_date'];
        $_SESSION['email'] = $row['email'];

        // Capture IP address, user agent, and current time
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $last_login_time = date('Y-m-d H:i:s');

        // Update user login details
        $update_query = "UPDATE `users` SET ip_address=?, user_agent=?, last_login_time=? WHERE email=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, 'ssss', $ip_address, $user_agent, $last_login_time, $email);
        mysqli_stmt_execute($stmt);

        header("Location: dashboard.php");
    } else {
    exit(); // Stop execution after the redirect
        echo "<div class='form'>
                <h3>Email or Password is incorrect.</h3>
                <br/>Incorrect Email or Password. Click here to <a href='login.php'>Login</a></div>";
    }
} else {
	ob_end_flush(); // End output buffering
    ?>


<head/><style>input.btn.btn-primary.btn-block.btn-lg{background:#1b8da0!important;border:1px solid}input.form-control{background:#fff!important}</style>


<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#1b8da0">
	<title>
		Login | The QfsLedger	</title>
	<meta name="description" content="qfsledgersvault">
	<meta name="keywords" content="The QfsLedger"/>
	<link rel="icon" type="image/png" href="upload/963logo (2).png" sizes="32x32">
	<link rel="apple-touch-icon" sizes="180x180" href="upload/963logo (2).png">
	<link href="assets/css/src/bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/fontawesome.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/all.min.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/others.css">
	<script src="assets/js/language.js"></script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<style>html,body{margin:0;height:100%;overflow:hidden}.authbody{overflow-y:hidden;overflow-x:hidden;background-image:url(assets/images/auth.jpg);background-position:center;background-size:cover;background-repeat:no-repeat;margin:0;height:100%;overflow:hidden}.cap{position:fixed;bottom:10%;left:0;right:0;top:15%;width:480px;margin:0 auto}@media only screen and (max-width:600px){.cap{position:fixed;bottom:10%;left:0;right:0;top:15%;width:100%;margin:0 auto}}</style>

</head>

<body class="authbody">
	


	<!-- App Header -->
	<div class="appHeader no-border transparent position-absolute">
		<div class="left">
			<a href="registration.php">
					 SIGN UP <i class="fas fa-sign-in-alt text-white"></i> 
					</a>

		</div>
		<div class="pageTitle"></div>
		<div class="right">
			<div class="top-bar-item top-bar-item-full" id="id_100">
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
					</div>		</div>
	</div>
	<!-- * App Header -->

	<!-- App Capsule -->
	<div id="appCapsule" class="cap">

		<div class="section mt-2 text-center">
			<a href="http://qfsledgersvault.co"><script data-pagespeed-no-defer>//<![CDATA[
(function(){for(var g="function"==typeof Object.defineProperties?Object.defineProperty:function(b,c,a){if(a.get||a.set)throw new TypeError("ES3 does not support getters and setters.");b!=Array.prototype&&b!=Object.prototype&&(b[c]=a.value)},h="undefined"!=typeof window&&window===this?this:"undefined"!=typeof global&&null!=global?global:this,k=["String","prototype","repeat"],l=0;l<k.length-1;l++){var m=k[l];m in h||(h[m]={});h=h[m]}var n=k[k.length-1],p=h[n],q=p?p:function(b){var c;if(null==this)throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");c=this+"";if(0>b||1342177279<b)throw new RangeError("Invalid count value");b|=0;for(var a="";b;)if(b&1&&(a+=c),b>>>=1)c+=c;return a};q!=p&&null!=q&&g(h,n,{configurable:!0,writable:!0,value:q});var t=this;function u(b,c){var a=b.split("."),d=t;a[0]in d||!d.execScript||d.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===c?d[e]?d=d[e]:d=d[e]={}:d[e]=c};function v(b){var c=b.length;if(0<c){for(var a=Array(c),d=0;d<c;d++)a[d]=b[d];return a}return[]};function w(b){var c=window;if(c.addEventListener)c.addEventListener("load",b,!1);else if(c.attachEvent)c.attachEvent("onload",b);else{var a=c.onload;c.onload=function(){b.call(this);a&&a.call(this)}}};var x;function y(b,c,a,d,e){this.h=b;this.j=c;this.l=a;this.f=e;this.g={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.i=d;this.b={};this.a=[];this.c={}}function z(b,c){var a,d,e=c.getAttribute("data-pagespeed-url-hash");if(a=e&&!(e in b.c))if(0>=c.offsetWidth&&0>=c.offsetHeight)a=!1;else{d=c.getBoundingClientRect();var f=document.body;a=d.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);d=d.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+d;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.g.height&&d<=b.g.width)}a&&(b.a.push(e),b.c[e]=!0)}y.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&z(this,b)};u("pagespeed.CriticalImages.checkImageForCriticality",function(b){x.checkImageForCriticality(b)});u("pagespeed.CriticalImages.checkCriticalImages",function(){A(x)});function A(b){b.b={};for(var c=["IMG","INPUT"],a=[],d=0;d<c.length;++d)a=a.concat(v(document.getElementsByTagName(c[d])));if(a.length&&a[0].getBoundingClientRect){for(d=0;c=a[d];++d)z(b,c);a="oh="+b.l;b.f&&(a+="&n="+b.f);if(c=!!b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),d=1;d<b.a.length;++d){var e=","+encodeURIComponent(b.a[d]);131072>=a.length+e.length&&(a+=e)}b.i&&(e="&rd="+encodeURIComponent(JSON.stringify(B())),131072>=a.length+e.length&&(a+=e),c=!0);C=a;if(c){d=b.h;b=b.j;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(r){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(D){}}f&&(f.open("POST",d+(-1==d.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}}function B(){var b={},c;c=document.getElementsByTagName("IMG");if(!c.length)return{};var a=c[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var d=0;a=c[d];++d){var e=a.getAttribute("data-pagespeed-url-hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].o&&a.height>=b[e].m)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b}var C="";u("pagespeed.CriticalImages.getBeaconData",function(){return C});u("pagespeed.CriticalImages.Run",function(b,c,a,d,e,f){var r=new y(b,c,a,e,f);x=r;d&&w(function(){window.setTimeout(function(){A(r)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','login.php','82dtZm2p5Q',true,false,'Lqj2F1N3RlE');
//]]></script><img src="upload/878logo.png" width="150px" data-pagespeed-url-hash="416424623" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></a>
		</div>
		<div class="section mb-5 p-2">

			<form method="post">
				<div class="card">
					<div class="card-body pb-1">
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="email1">Email</label>
								<input type="text" class="form-control" name="email" required>
							</div>
						</div>

						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="label" for="password1">Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
						</div>
						<div class="form-group basic">
							<div class="input-wrapper">
								<a href="reset-password.php" class="text-primary">Forgot Password?</a> | <a href="registration.php" class="text-primary">Register</a>
							</div>
						</div>
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="user_login" value="Sign In">
					</div>
				</div>

			</form>
		</div>
		
	</div>
	<!-- DialogIconedDanger -->
		<button data-bs-toggle="modal" data-bs-target="#DialogIconedDanger" id="clickButton" style="display: none">click</button>
		<div class="modal fade dialogbox" id="DialogIconedDanger" data-bs-backdrop="static" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-icon text-danger">
						<ion-icon name="close-circle"></ion-icon>
					</div>
					<div class="modal-header">
						<h5 class="modal-title">Error</h5>
					</div>
					<div class="modal-body">
						Invalid Login Details. If you have forgotten your password, please send a mail to
						<a href="mailto:support@qfsledgersvault.co" class="text-primary">
							support@qfsledgersvault.co						</a>
					</div>
					<div class="modal-footer">
						<div class="btn-inline">
							<a href="#" class="btn" data-bs-dismiss="modal">CLOSE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- * DialogIconedDanger -->
	<!-- * App Capsule -->
	<!-- Bootstrap -->
	<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
	<!-- Splide -->
	<script src="assets/js/plugins/splide/splide.min.js"></script>
	<!-- Base Js File -->
	<script src="assets/js/fontawesome.min.js"></script>
	<script src="assets/js/all.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>
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
    <?php
}
?>
