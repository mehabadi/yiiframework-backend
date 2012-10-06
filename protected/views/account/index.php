<div id="alertMessage"></div>
<div id="successLogin"></div>
<div class="text_success"><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/loadder/loader_green.gif"  alt="ziceAdmin" /><span>Please wait</span></div>

<div id="login" >
    <div class="ribbon"></div>
    <div class="inner">
        <div class="logo" ><img src="<?php echo Yii::app()->baseUrl; ?>/themes/admin/images/logo/logo_login.png" alt="ziceAdmin" /></div>
        <div class="formLogin">


            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'formlogin',
                'enableClientValidation' => false,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'action'=> Controller::createUrl("account/login")
            ));
            
            ?>
            <div class="tip">                
                <?php echo $form->textField($model, 'username', array("id" => "username_id", "title" => _("Username"), "autocomplete" => "off")); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>
            <div class="tip">  
                <?php echo $form->passwordField($model, 'password', array("id" => "password", "title" => _("Password"), "autocomplete" => "off")); ?>
                <?php echo $form->error($model, 'password'); ?>
            </div>
            <div class="loginButton">
                <div style="float:left; margin-left:-9px;">
                    <?php echo $form->checkbox($model, 'rememberMe', array("id" => "on_off", "class" => "on_off_checkbox")); ?>                    
                    <span class="f_help">Remember me</span>
                </div>
                <div style="float:right; padding:3px 0; margin-right:-12px;">
                    <div> 
                        <ul class="uibutton-group">
                            <li><a class="uibutton normal" href="#" id="but_login" >Login</a></li>
                            <li><a class="uibutton normal" href="#" id="forgetpass">forgetpass</a></li>

                        </ul>
                    </div>

                </div>
                <div class="clear"></div>
            </div>
            <?php $this->endWidget();
            ?>
            <!--<form name="formLogin"  id="formLogin" action="<?php echo Yii::app()->baseUrl ?>">

                                <div class="tip">
                                    <input name="username" type="text" id="username_id"  title="Username" autocomplete="off" />
                                </div>
                                <div class="tip">
                                    <input name="password" type="password" id="password"   title="Password" autocomplete="off" />
                                </div>

                <div class="loginButton">
                    <div style="float:left; margin-left:-9px;">
                        <input type="checkbox" id="on_off" name="remember" class="on_off_checkbox"  value="1" />
                        <span class="f_help">Remember me</span>
                    </div>
                    <div style="float:right; padding:3px 0; margin-right:-12px;">
                        <div> 
                            <ul class="uibutton-group">
                                <li><a class="uibutton normal" href="#" id="but_login" >Login</a></li>
                                <li><a class="uibutton normal" href="#" id="forgetpass">forgetpass</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="clear"></div>
                </div>

            </form>-->
        </div>
    </div>
    <div class="clear"></div>
    <div class="shadow"></div>
</div>