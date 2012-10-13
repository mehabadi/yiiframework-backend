<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function authenticate() {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);            
            if ($this->_identity->authenticate()) {
                $duration = ($this->rememberMe == 1 ? 3600 * 24 * 7 : Yii::app()->session->timeout); // 7 days
                yii::app()->user->setState('userSessionTimeout', time() + $duration);
                Yii::app()->user->login($this->_identity, $duration);
                return true;
            }
        }
        else
            return false;
    }

}
