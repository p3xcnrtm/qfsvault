<?php
 
$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;
 
if(!is_null($captcha)){
	$res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf434wlAAAAAO_hJaO56r3s5HB39zpYgX5SRjTc&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
	if($res->success === true){
		//CAPTCHA validado!!!
		echo 'Tudo certo =)';
	}
	else{
		echo 'Error validating the captcha!!!';
	}
}
else{
	echo 'Captcha not filled out!';
}
