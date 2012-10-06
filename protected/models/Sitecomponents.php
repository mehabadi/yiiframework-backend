<?php

/**
 * This is the model class for table "{{sitecomponents}}".
 *
 * The followings are the available columns in table '{{sitecomponents}}':
 * @property integer $ApplicationId
 * @property integer $Id
 * @property string $Title
 * @property integer $StatusId
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property Categories[] $categories
 * @property Status $status
 * @property Applications $application
 */
class Sitecomponents extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sitecomponents the static model class
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
		return '{{sitecomponents}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplicationId, Title, StatusId', 'required'),
			array('ApplicationId, StatusId', 'numerical', 'integerOnly'=>true),
			array('Title', 'length', 'max'=>50),
			array('Description', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ApplicationId, Id, Title, StatusId, Description', 'safe', 'on'=>'search'),
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
			'categories' => array(self::HAS_MANY, 'Categories', 'SiteComponentId'),
			'status' => array(self::BELONGS_TO, 'Status', 'StatusId'),
			'application' => array(self::BELONGS_TO, 'Applications', 'ApplicationId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ApplicationId' => 'Application',
			'Id' => 'ID',
			'Title' => 'Title',
			'StatusId' => 'Status',
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
		$criteria->compare('Id',$this->Id);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('StatusId',$this->StatusId);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}