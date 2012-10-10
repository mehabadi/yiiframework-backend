<?php

class AccountController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        if (!Yii::app()->user->isGuest && Yii::app()->user->checkAccess('admin'))
            $this->redirect(Controller::createUrl("dashboard/index"));
        $this->layout = '//layouts/login';
        HtmlHelpers::putViewScript();
        HtmlHelpers::putGlobalScript();

        $model = new LoginForm;

        // display the login form
        $this->render('index', array('model' => $model));
    }

    public function actionLogin() {

        # without ajax       
//        $model = new LoginForm;
//        // collect user input data
//        if (isset($_POST['LoginForm'])) {
//            $model->attributes = $_POST['LoginForm']; //$data;            
//            // validate user input and redirect to the previous page if valid
//            if ($model->validate() && $model->login())  
//                $this->redirect(Controller::createUrl("Dashboard"));                           
//        }               
//        $this->redirect(Yii::app()->user->returnUrl);  
//        

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        //respond with json content type
        header('Content-type:application/json');

        $model = new LoginForm;
        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm']; //$data;            
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                echo json_encode(array('error' => false, 'errorMessage' => '', 'url' => Controller::createUrl("Dashboard/index")));
            else
                echo json_encode(array('error' => true, 'errorMessage' => _('UERNAME OR PASSWORD IS INCORRECT')));

            return true;
        }
        return false;
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        $this->layout = '//layouts/error';
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        yii::app()->user->setState('userSessionTimeout', null);        
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    /**
     * Keep the session alive, called by timeout-dialog.
     */
    public function actionKeepAlive() {
        yii::app()->user->setState('userSessionTimeout', time() + Yii::app()->session->timeout);
        echo 'OK';
        Yii::app()->end();
    }

}