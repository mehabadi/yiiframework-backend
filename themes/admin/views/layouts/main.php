<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="language" content="<?php echo Yii::app()->language ?>" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

        <!-- Link shortcut icon-->
        <link rel="shortcut icon" type="image/ico" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/favicon2.ico"/> 

        <!-- Link css-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.custom.css"/>
        <?php if (Yii::app()->params->direction == 'rtl') { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.rtl.css"/>
        <?php } ?>


        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admincomponents/flot/excanvas.min.js"></script><![endif]-->  
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/ui/jquery.ui.min.js"></script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/tipsy/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/zice.custom.js"></script>    
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/scrolltop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/checkboxes/iphone.check.js"></script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/ui/jquery.autotab.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/jscrollpane/jscrollpane.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/filestyle/jquery.filestyle.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/ui/timepicker.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/colorpicker/js/colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/elfinder/js/elfinder.full.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/datatables/dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/datatables/ColVis.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/jscrollpane/mousewheel.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/jscrollpane/mwheelIntent.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/spinner/ui.spinner.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/editor/jquery.cleditor.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/chosen/chosen.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/confirm/jquery.confirm.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/validationEngine/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/validationEngine/jquery.validationEngine-en.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/sourcerer/sourcerer.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/fullcalendar/fullcalendar.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/flot/flot.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/flot/flot.pie.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/flot/flot.resize.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/flot/graphtable.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/uploadify/swfobject.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/uploadify/uploadify.js"></script>        
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/checkboxes/customInput.jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/placeholder/jquery.placeholder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/Jcrop/jquery.Jcrop.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/webcam/webcam.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/rating_star/rating_star.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/dualListBox/dualListBox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/maskedinput/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/highlightText/highlightText.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/elastic/jquery.elastic.source.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/smartWizard/jquery.smartWizard.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/vticker/jquery.vticker-min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/imgTransform/jquery.transform.js"></script>


        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/effect/jquery-jrumble.js"></script>        
        <script type="text/javascript">
            var _BASE_URL = "<?php echo Yii::app()->baseUrl; ?>";
            var _BASE_THEME_URL = "<?php echo Yii::app()->baseUrl; ?>/themes/<?php echo Yii::app()->theme->name; ?>/";           
            var _LOGOUT_URL = "<?php echo $this->createUrl("account/logout") ?>";
        </script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/FixJS.js"></script>    
    </head> 


    <body class="dashborad">   
        <div id="alertMessage"></div>        
        <div class="text_loading"><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/loadder/loader_green.gif"  alt="ziceAdmin" /><span><?php echo _("Please wait"); ?></span></div>
        <!-- Header -->
        <div id="header">
            <div id="account_info"> 
                <?php
                $this->widget('application.widgets.LanguageSelector.LanguageSelector');
                ?>

                <div class="setting"><b><?php echo _("Welcome,") ?></b> <b class="red"><?php echo Yii::app()->user->name; ?></b><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/gear.png" class="gear"  alt="<?php echo _("Profile Setting")?>" >
                        <ul class="subnav ">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Setting</a></li>
                            <li><a href="#">Reset password</a></li>

                        </ul>
                </div>
                <div id="logout" class="logout" title="Disconnect"><b ><?php echo _("Logout")?></b> <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/connect.png" name="connect" class="disconnect" alt="<?php echo _("disconnect")?>" ></div> 
            </div>
        </div><!-- End Header -->
        <div id="shadowhead"></div>

        <div id="left_menu">

            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => _('Dashboard'), 'url' => array('/dashboard/index'), 'itemOptions' => array('class' => 'limenu'), 'linkOptions' => array('class' => 'ico gray shadow home')),
                    array('label' => _('Category Manager'), 'url' => array('/Category/index'), 'itemOptions' => array('class' => 'limenu'), 'linkOptions' => array('class' => 'ico gray shadow  spreadsheet')),
                    array('label' => _('About'), 'url' => array('/site/page', 'view' => 'about')),
                    array('label' => _('Contact'), 'url' => array('/site/contact')),
                    array('label' => _('Login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => _('Logout') . ' (' . Yii::app()->user->name . ')', 'url' => array('/account/logout'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Manager', 'url' => array(''), 'visible' => Yii::app()->user->checkAccess('manager')),
                    array('label' => 'admin', 'url' => array(''), 'visible' => Yii::app()->user->checkAccess('admin'))
                ),
                'id' => "main_menu",
                'activeCssClass' => 'select',
                'htmlOptions' => array('class' => 'main_menu',),
            ));
            ?>

        </div>

        <div id="content">
            <div class="inner">
                <div class="topcolumn">
                    <div class="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>

                    <ul  id="shortcut">
                        <li> <a href="#" title="Back To home"> <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/icon/shortcut/home.png" alt="home"/><strong>Home</strong> </a> </li>
                        <li> <a href="#" title="Website Graph"> <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/icon/shortcut/graph.png" alt="graph"/><strong>Graph</strong> </a> </li>
                        <li> <a href="#" title="Setting" > <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/icon/shortcut/setting.png" alt="setting" /><strong>Setting</strong></a> </li> 
                        <li> <a href="#" title="Messages"> <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/icon/shortcut/mail.png" alt="messages" /><strong>Message</strong></a><div class="notification" >10</div></li>
                    </ul>                        
                </div>
                <div class="clear"></div>
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?><!-- breadcrumbs -->
                <?php endif; ?>

                <!-- full width -->                    
                <?php echo $content; ?>

                <!-- clear fix -->
                <div class="clear"></div>

                <!-- clear fix -->
                <div class="clear"></div>        
                <div id="footer"> 
                    Copyright &copy; <?php echo date('Y'); ?> by <a href="<?php echo _(Yii::app()->params["copyright_url"]); ?>"><?php echo _(Yii::app()->params["copyright"]); ?></a>.<br/>
                    <?php echo _("All Rights Reserved.") ?><br/>
                </div>
            </div><!-- End content -->
        </div><!-- End full width -->
        <?php
        $this->widget('application.widgets.timeout-dialog.ETimeoutDialog', array(
            // Get timeout settings from session settings.
            'timeout' => Yii::app()->getSession()->getTimeout(),
            // Uncomment to test.
            // Dialog should appear 20 sec after page load.
            //'timeout' => 80,
            'keep_alive_url' => $this->createUrl('/account/keepalive'),
            'logout_redirect_url' => $this->createUrl('/account/logout'),
        ));
        ?>      <div style="height:700px;"></div>
    </body>
</html>
