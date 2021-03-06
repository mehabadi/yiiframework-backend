<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo _(Yii::app()->name) ?></title>
        <link href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/components/effect/jquery-jrumble.js"></script>
        <script type="text/javascript">
            jQuery(function($){
                $('#tv-wrap').jrumble({ x: 4,y: 0,rotation: 0 });	
                $('#tv-wrap').trigger('startRumble');		  
                $('.slides').addClass('active').cycle({
                    fx:     'none',
                    speed:   1,
                    timeout: 70
                }).cycle("resume");	
            });
        </script>
        <?php if (Yii::app()->params->direction == 'rtl') { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/themes/admin/css/zice.style.rtl.css"/>
        <?php } ?>
        <style type="text/css">
            html {
                background-image: none;
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
            }
            .copyright{
                text-align:center; font-size:10px; color:#CCC;
            }
            .copyright a{
                color:#A31F1A; text-decoration:none
            }    
        </style>
    </head>
    <body class="error">
        <div class="errorpage">
            <div id="tv-wrap"> <img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/tv.png" width="300" height="273" id="tv"/>
                <div class="slideshow-block"> <a href="dashboard.html" class="link"></a>
                    <ul class="slides">
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/1.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/2.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/3.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/4.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/5.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/6.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/7.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/8.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/9.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/10.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/11.jpg"/></li>
                        <li><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/pageserror/12.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div id="text">
                <h1> <?php echo _("404 Page not found!"); ?></h1>
                <h2><?php echo _("Oops! Sorry, an error has occured.") ?></h2>

            </div>
            <center><a href="<?php echo $this->createurl("dashboard/index"); ?>"><?php echo _("Back To Dashboard") ?></a></center>
        </div>
        <div class="clear"></div>
        <div id="versionBar" >
            <div class="copyright" > 
                <?php printf(_("Copyright &copy; %d by %s."),date('Y'), "<a href='".Yii::app()->params["copyright_url"]."'>"._(Yii::app()->params["copyright"])."</a>")?> 
            </div>
            <!-- // copyright-->
        </div>
        <script type="text/javascript">
            var text = document.getElementById('text'),
            body = document.body,
            steps = 7;
            function threedee (e) {
                var x = Math.round(steps / (window.innerWidth / 2) * (window.innerWidth / 2 - e.clientX)),
                y = Math.round(steps / (window.innerHeight / 2) * (window.innerHeight / 2 - e.clientY)),
                shadow = '',
                color = 190,
                radius = 3,
                i;	
                for (i=0; i<steps; i++) {
                    tx = Math.round(x / steps * i);
                    ty = Math.round(y / steps * i);
                    if (tx || ty) {
                        color -= 3 * i;
                        shadow += tx + 'px ' + ty + 'px 0 rgb(' + color + ', ' + color + ', ' + color + '), ';
                    }
                }
                shadow += x + 'px ' + y + 'px 1px rgba(0,0,0,.2), ' + x*2 + 'px ' + y*2 + 'px 6px rgba(0,0,0,.3)';	
                text.style.textShadow = shadow;
                text.style.webkitTransform = 'translateZ(0) rotateX(' + y*1.5 + 'deg) rotateY(' + -x*1.5 + 'deg)';
                text.style.MozTransform = 'translateZ(0) rotateX(' + y*1.5 + 'deg) rotateY(' + -x*1.5 + 'deg)';
            }
            document.addEventListener('mousemove', threedee, false);
        </script>
    </body>
</html>