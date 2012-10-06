<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <title><?php echo _(Yii::app()->name)?></title>

        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/html5.js"></script>
        <![endif]-->
        <link href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/icon.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/tipsy/tipsy.css" media="all"/>
        <style type="text/css">
            html {
                background-image: none;
            }
            label.iPhoneCheckLabelOn span {
                padding-left:0px
            }
            #versionBar {
                background-color:#212121;
                position:fixed;
                width:100%;
                height:35px;
                bottom:0;
                left:0;
                text-align:center;
                line-height:35px;
                z-index:11;
                -webkit-box-shadow: black 0px 10px 10px -10px inset;
                -moz-box-shadow: black 0px 10px 10px -10px inset;
                box-shadow: black 0px 10px 10px -10px inset;
            }
            .copyright{
                text-align:center; font-size:10px; color:#CCC;
            }
            .copyright a{
                color:#A31F1A; text-decoration:none
            }    
        </style>
    </head>
    <body>
        <?php echo $content; ?>
        
        <!--Login div-->
        <div class="clear"></div>
        <div id="versionBar" >
            <div class="copyright" > &copy; Copyright <?php echo date("Y");?>  All Rights Reserved <span class="tip"><a  href="<?php echo Yii::app()->params["copyright_url"]; ?>" title="<?php echo Yii::app()->params["copyright"]; ?>" ><?php echo Yii::app()->params["copyright"]; ?></a> </span> </div>
            <!-- // copyright-->
        </div>
        <!-- Link JScript-->

        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/effect/jquery-jrumble.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/ui/jquery.ui.min.js"></script>     
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/checkboxes/iphone.check.js"></script>
    </body>
</html>