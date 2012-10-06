<?php

/**
 * This is the model class for table "{{categories}}".
 *
 * The followings are the available columns in table '{{categories}}':
 * @property integer $Id
 * @property integer $DomainId
 * @property integer $ParentId
 * @property integer $SiteComponentId
 * @property integer $Periority
 * @property string $Title
 * @property string $URLAlias
 * @property integer $StatusId
 * @property integer $ImageId
 * @property string $Params
 * @property string $Description
 *
 * The followings are the available model relations:
 * @property Categories $parent
 * @property Categories[] $categories
 * @property Status $status
 * @property Domains $domain
 * @property Sitecomponents $siteComponent
 * @property Contentcategories[] $contentcategories
 */
class Categories extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categories the static model class
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
		return '{{categories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DomainId, SiteComponentId, Periority, Title, StatusId', 'required'),
			array('DomainId, ParentId, SiteComponentId, Periority, StatusId, ImageId', 'numerical', 'integerOnly'=>true),
			array('Title, URLAlias', 'length', 'max'=>256),
			array('Params', 'length', 'max'=>1024),
			array('Description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, DomainId, ParentId, SiteComponentId, Periority, Title, URLAlias, StatusId, ImageId, Params, Description', 'safe', 'on'=>'search'),
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
			'parent' => array(self::BELONGS_TO, 'Categories', 'ParentId'),
			'categories' => array(self::HAS_MANY, 'Categories', 'ParentId'),
			'status' => array(self::BELONGS_TO, 'Status', 'StatusId'),
			'domain' => array(self::BELONGS_TO, 'Domains', 'DomainId'),
			'siteComponent' => array(self::BELONGS_TO, 'Sitecomponents', 'SiteComponentId'),
			'contentcategories' => array(self::HAS_MANY, 'Contentcategories', 'CategoryId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'DomainId' => 'Domain',
			'ParentId' => 'Parent',
			'SiteComponentId' => 'Site Component',
			'Periority' => 'Periority',
			'Title' => 'Title',
			'URLAlias' => 'Urlalias',
			'StatusId' => 'Status',
			'ImageId' => 'Image',
			'Params' => 'Params',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('DomainId',$this->DomainId);
		$criteria->compare('ParentId',$this->ParentId);
		$criteria->compare('SiteComponentId',$this->SiteComponentId);
		$criteria->compare('Periority',$this->Periority);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('URLAlias',$this->URLAlias,true);
		$criteria->compare('StatusId',$this->StatusId);
		$criteria->compare('ImageId',$this->ImageId);
		$criteria->compare('Params',$this->Params,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}