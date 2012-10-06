<?php

/**
 * This is the model class for table "{{contentinitialize}}".
 *
 * The followings are the available columns in table '{{contentinitialize}}':
 * @property integer $Id
 * @property integer $DomainId
 * @property string $Title
 * @property integer $Periority
 * @property string $Params
 * @property integer $RoleId
 * @property integer $StatusId
 *
 * The followings are the available model relations:
 * @property Contentcategories[] $contentcategories
 * @property Status $status
 * @property Domains $domain
 * @property Contentscommoninfo $contentscommoninfo
 * @property Contentsprivateinfo $contentsprivateinfo
 */
class Contentinitialize extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contentinitialize the static model class
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
		return '{{contentinitialize}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('DomainId, Title, Periority, StatusId', 'required'),
			array('DomainId, Periority, RoleId, StatusId', 'numerical', 'integerOnly'=>true),
			array('Title, Params', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, DomainId, Title, Periority, Params, RoleId, StatusId', 'safe', 'on'=>'search'),
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
			'contentcategories' => array(self::HAS_MANY, 'Contentcategories', 'ContentId'),
			'status' => array(self::BELONGS_TO, 'Status', 'StatusId'),
			'domain' => array(self::BELONGS_TO, 'Domains', 'DomainId'),
			'contentscommoninfo' => array(self::HAS_ONE, 'Contentscommoninfo', 'ContentId'),
			'contentsprivateinfo' => array(self::HAS_ONE, 'Contentsprivateinfo', 'ContentId'),
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
			'Title' => 'Title',
			'Periority' => 'Periority',
			'Params' => 'Params',
			'RoleId' => 'Role',
			'StatusId' => 'Status',
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
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Periority',$this->Periority);
		$criteria->compare('Params',$this->Params,true);
		$criteria->compare('RoleId',$this->RoleId);
		$criteria->compare('StatusId',$this->StatusId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}