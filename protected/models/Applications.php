<?php

/**
 * This is the model class for table "{{applications}}".
 *
 * The followings are the available columns in table '{{applications}}':
 * @property integer $ApplicationId
 * @property string $ApplicationName
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property Roles[] $roles
 * @property Sitecomponents[] $sitecomponents
 * @property Users[] $users
 */
class Applications extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Applications the static model class
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
		return '{{applications}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplicationName', 'required'),
			array('ApplicationName, Description', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ApplicationId, ApplicationName, Description', 'safe', 'on'=>'search'),
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
			'roles' => array(self::HAS_MANY, 'Roles', 'ApplicationId'),
			'sitecomponents' => array(self::HAS_MANY, 'Sitecomponents', 'ApplicationId'),			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ApplicationId' => 'Application',
			'ApplicationName' => 'Application Name',
			'Description' => 'Description',
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
		$criteria->compare('ApplicationName',$this->ApplicationName,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}