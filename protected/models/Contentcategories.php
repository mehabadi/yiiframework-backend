<?php

/**
 * This is the model class for table "{{contentcategories}}".
 *
 * The followings are the available columns in table '{{contentcategories}}':
 * @property integer $Id
 * @property integer $ContentId
 * @property integer $CategoryId
 * @property integer $IsMain
 * @property integer $StatusId
 *
 * The followings are the available model relations:
 * @property Status $status
 * @property Contentinitialize $content
 * @property Categories $category
 */
class Contentcategories extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contentcategories the static model class
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
		return '{{contentcategories}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContentId, CategoryId, IsMain, StatusId', 'required'),
			array('ContentId, CategoryId, IsMain, StatusId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, ContentId, CategoryId, IsMain, StatusId', 'safe', 'on'=>'search'),
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
			'status' => array(self::BELONGS_TO, 'Status', 'StatusId'),
			'content' => array(self::BELONGS_TO, 'Contentinitialize', 'ContentId'),
			'category' => array(self::BELONGS_TO, 'Categories', 'CategoryId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'ContentId' => 'Content',
			'CategoryId' => 'Category',
			'IsMain' => 'Is Main',
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
		$criteria->compare('ContentId',$this->ContentId);
		$criteria->compare('CategoryId',$this->CategoryId);
		$criteria->compare('IsMain',$this->IsMain);
		$criteria->compare('StatusId',$this->StatusId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}