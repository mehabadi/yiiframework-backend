<?php

/**
 * This is the model class for table "{{memberships}}".
 *
 * The followings are the available columns in table '{{memberships}}':
 * @property integer $ApplicationId
 * @property integer $UserId
 * @property string $Password
 * @property string $PasswordSalt
 * @property string $Email
 * @property string $PasswordQuestion
 * @property string $PasswordAnswer
 * @property integer $IsApproved
 * @property integer $IsLockedOut
 * @property string $CreateDate
 * @property string $LastLoginDate
 * @property string $LastPasswordChangedDate
 * @property string $LastLockoutDate
 * @property integer $FailedPasswordAttemptCount
 * @property string $FailedPasswordAttemptWindowStart
 * @property integer $FailedPasswordAnswerAttemptCount
 * @property string $FailedPasswordAnswerAttemptWindowsStart
 * @property string $Comment
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Memberships extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Memberships the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{memberships}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplicationId, UserId, Password, PasswordSalt, IsApproved, IsLockedOut, CreateDate, LastLoginDate, LastPasswordChangedDate, LastLockoutDate, FailedPasswordAttemptCount, FailedPasswordAttemptWindowStart, FailedPasswordAnswerAttemptCount, FailedPasswordAnswerAttemptWindowsStart', 'required'),
			array('ApplicationId, UserId, IsApproved, IsLockedOut, FailedPasswordAttemptCount, FailedPasswordAnswerAttemptCount', 'numerical', 'integerOnly'=>true),
			array('Password, PasswordSalt', 'length', 'max'=>128),
			array('Email, PasswordQuestion, PasswordAnswer, Comment', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ApplicationId, UserId, Password, PasswordSalt, Email, PasswordQuestion, PasswordAnswer, IsApproved, IsLockedOut, CreateDate, LastLoginDate, LastPasswordChangedDate, LastLockoutDate, FailedPasswordAttemptCount, FailedPasswordAttemptWindowStart, FailedPasswordAnswerAttemptCount, FailedPasswordAnswerAttemptWindowsStart, Comment', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'Users', 'UserId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ApplicationId' => 'Application',
			'UserId' => 'User',
			'Password' => 'Password',
			'PasswordSalt' => 'Password Salt',
			'Email' => 'Email',
			'PasswordQuestion' => 'Password Question',
			'PasswordAnswer' => 'Password Answer',
			'IsApproved' => 'Is Approved',
			'IsLockedOut' => 'Is Locked Out',
			'CreateDate' => 'Create Date',
			'LastLoginDate' => 'Last Login Date',
			'LastPasswordChangedDate' => 'Last Password Changed Date',
			'LastLockoutDate' => 'Last Lockout Date',
			'FailedPasswordAttemptCount' => 'Failed Password Attempt Count',
			'FailedPasswordAttemptWindowStart' => 'Failed Password Attempt Window Start',
			'FailedPasswordAnswerAttemptCount' => 'Failed Password Answer Attempt Count',
			'FailedPasswordAnswerAttemptWindowsStart' => 'Failed Password Answer Attempt Windows Start',
			'Comment' => 'Comment',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ApplicationId',$this->ApplicationId);
		$criteria->compare('UserId',$this->UserId);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('PasswordSalt',$this->PasswordSalt,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('PasswordQuestion',$this->PasswordQuestion,true);
		$criteria->compare('PasswordAnswer',$this->PasswordAnswer,true);
		$criteria->compare('IsApproved',$this->IsApproved);
		$criteria->compare('IsLockedOut',$this->IsLockedOut);
		$criteria->compare('CreateDate',$this->CreateDate,true);
		$criteria->compare('LastLoginDate',$this->LastLoginDate,true);
		$criteria->compare('LastPasswordChangedDate',$this->LastPasswordChangedDate,true);
		$criteria->compare('LastLockoutDate',$this->LastLockoutDate,true);
		$criteria->compare('FailedPasswordAttemptCount',$this->FailedPasswordAttemptCount);
		$criteria->compare('FailedPasswordAttemptWindowStart',$this->FailedPasswordAttemptWindowStart,true);
		$criteria->compare('FailedPasswordAnswerAttemptCount',$this->FailedPasswordAnswerAttemptCount);
		$criteria->compare('FailedPasswordAnswerAttemptWindowsStart',$this->FailedPasswordAnswerAttemptWindowsStart,true);
		$criteria->compare('Comment',$this->Comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}