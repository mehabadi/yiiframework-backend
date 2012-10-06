<?php

/**
 * This is the model class for table "{{status}}".
 *
 * The followings are the available columns in table '{{status}}':
 * @property integer $Id
 * @property string $Title
 *
 * The followings are the available model relations:
 * @property Categories[] $categories
 * @property Contentcategories[] $contentcategories
 * @property Contentinitialize[] $contentinitializes
 * @property Domains[] $domains
 * @property Sitecomponents[] $sitecomponents
 */
class Status extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Status the static model class
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
		return '{{status}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, Title', 'required'),
			array('Id', 'numerical', 'integerOnly'=>true),
			array('Title', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Title', 'safe', 'on'=>'search'),
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
			'categories' => array(self::HAS_MANY, 'Categories', 'StatusId'),
			'contentcategories' => array(self::HAS_MANY, 'Contentcategories', 'StatusId'),
			'contentinitializes' => array(self::HAS_MANY, 'Contentinitialize', 'StatusId'),
			'domains' => array(self::HAS_MANY, 'Domains', 'StatusId'),
			'sitecomponents' => array(self::HAS_MANY, 'Sitecomponents', 'StatusId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Title' => 'Title',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('Title',$this->Title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}