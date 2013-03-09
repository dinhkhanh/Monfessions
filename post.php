<?php
/*
	Mail Confessions
	Description: Send confessions to owen's mail.
	Author: MOC
	Author URL: http://dinhkhanh.dk
	URL: http://facemoc.com
	License: GPL
	Version: 1.0
*/
if(isset($_POST['moc'])){
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$to .= 'Tran Dinh Khanh <tran@dinhkhanh.dk>, Confessions Archive <dinhkhanh_dk@yahoo.com>';

	$subject = 'Confession at ' . date("H:i:s l d/m/y");
	$message = '
	<html>
	<head>
	  <title>Mốc Confessions</title>
	</head>
	<body>
	  <h2>Mốc Confession at '.date("H:i:s l d/m/y").'</h2>
	  <p>Mình thích gọi bạn là '.$_POST['callMe'].'</p>
	  <p>'.$_POST['showCfs'].'</p>
	  <p>'.$_POST['confess'].'</p>
	  <p>'.$_SERVER[REMOTE_ADDR].'<p>
	</body>
	</html>
	';

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

	$headers .= 'From: Moc Confessions <dailymail.dk@gmail.com>' . "\r\n";
	$headers .= 'Cc: dailymail.dk@gmail.com' . "\r\n";

	$send = mail($to, $subject, $message, $headers);
	if ($send) {
		echo json_encode(array("code" => 0));
		exit();
	}
	echo json_encode(array("code" => 1));
}
?>