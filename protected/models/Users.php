<?php

/**
 * This is the model class for table "{{users}}".
 *
 * The followings are the available columns in table '{{users}}':
 * @property integer $ApplicationId
 * @property integer $UserId
 * @property string $UserName
 * @property integer $RoleId
 * @property string $Password
 * @property string $PasswordSalt
 * @property integer $IsAnonymous
 * @property string $LastActivityDate
 *
 * The followings are the available model relations:
 * @property Memberships $memberships
 * @property Roles $role
 * @property Applications $application
 */
class Users extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Users the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{users}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('UserName, RoleId, Password, PasswordSalt, IsAnonymous', 'required'),
            array('ApplicationId, RoleId, IsAnonymous', 'numerical', 'integerOnly' => true),
            array('UserName', 'length', 'max' => 50),
            array('Password, PasswordSalt', 'length', 'max' => 128),
            array('LastActivityDate', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('ApplicationId, UserId, UserName, RoleId, Password, PasswordSalt, IsAnonymous, LastActivityDate', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'memberships' => array(self::HAS_ONE, 'Memberships', 'UserId'),
            'role' => array(self::BELONGS_TO, 'Roles', 'RoleId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'ApplicationId' => 'Application',
            'UserId' => 'User',
            'UserName' => 'User Name',
            'RoleId' => 'Role',
            'Password' => 'Password',
            'PasswordSalt' => 'Password Salt',
            'IsAnonymous' => 'Is Anonymous',
            'LastActivityDate' => 'Last Activity Date',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('ApplicationId', $this->ApplicationId);
        $criteria->compare('UserId', $this->UserId);
        $criteria->compare('UserName', $this->UserName, true);
        $criteria->compare('RoleId', $this->RoleId);
        $criteria->compare('Password', $this->Password, true);
        $criteria->compare('PasswordSalt', $this->PasswordSalt, true);
        $criteria->compare('IsAnonymous', $this->IsAnonymous);
        $criteria->compare('LastActivityDate', $this->LastActivityDate, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function validatePassword($password) {
        return $this->hashPassword($password, $this->PasswordSalt) === $this->Password;
    }

    public function hashPassword($password, $salt) {
        return md5($salt . $password);
    }

}