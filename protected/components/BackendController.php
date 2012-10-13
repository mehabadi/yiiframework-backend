<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class BackendController extends Controller {

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('index', 'list', 'delete', 'create', 'update'),
                'roles' => array('admin', 'manager'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function beforeAction($action) {
        //printf( "injam %d - %d | %b",yii::app()->user->getState('userSessionTimeout'),time(), yii::app()->user->getState('userSessionTimeout') < time());        
        if (yii::app()->user->getState('userSessionTimeout') < time()) {
            // timeout  
            $this->redirect($this->createUrl('/Account/Logout'));
        } else {
            yii::app()->user->setState('userSessionTimeout', time() + Yii::app()->session->timeout);
            return true;
        }
    }

}