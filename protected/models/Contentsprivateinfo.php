<?php

/**
 * This is the model class for table "{{contentsprivateinfo}}".
 *
 * The followings are the available columns in table '{{contentsprivateinfo}}':
 * @property integer $ContentId
 * @property string $CreateTime
 * @property string $LastModifyTime
 * @property integer $Owner
 * @property integer $BodyCharCount
 * @property integer $LastUser
 * @property integer $CurrentUser
 * @property integer $EditingUser
 * @property integer $PublisherUser
 * @property integer $LastModifyerUser
 *
 * The followings are the available model relations:
 * @property Contentinitialize $content
 */
class Contentsprivateinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contentsprivateinfo the static model class
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
		return '{{contentsprivateinfo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContentId, CreateTime, Owner, LastUser, LastModifyerUser', 'required'),
			array('ContentId, Owner, BodyCharCount, LastUser, CurrentUser, EditingUser, PublisherUser, LastModifyerUser', 'numerical', 'integerOnly'=>true),
			array('LastModifyTime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ContentId, CreateTime, LastModifyTime, Owner, BodyCharCount, LastUser, CurrentUser, EditingUser, PublisherUser, LastModifyerUser', 'safe', 'on'=>'search'),
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
			'content' => array(self::BELONGS_TO, 'Contentinitialize', 'ContentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ContentId' => 'Content',
			'CreateTime' => 'Create Time',
			'LastModifyTime' => 'Last Modify Time',
			'Owner' => 'Owner',
			'BodyCharCount' => 'Body Char Count',
			'LastUser' => 'Last User',
			'CurrentUser' => 'Current User',
			'EditingUser' => 'Editing User',
			'PublisherUser' => 'Publisher User',
			'LastModifyerUser' => 'Last Modifyer User',
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

		$criteria->compare('ContentId',$this->ContentId);
		$criteria->compare('CreateTime',$this->CreateTime,true);
		$criteria->compare('LastModifyTime',$this->LastModifyTime,true);
		$criteria->compare('Owner',$this->Owner);
		$criteria->compare('BodyCharCount',$this->BodyCharCount);
		$criteria->compare('LastUser',$this->LastUser);
		$criteria->compare('CurrentUser',$this->CurrentUser);
		$criteria->compare('EditingUser',$this->EditingUser);
		$criteria->compare('PublisherUser',$this->PublisherUser);
		$criteria->compare('LastModifyerUser',$this->LastModifyerUser);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}