<?php

/**
 * This is the model class for table "{{contentscommoninfo}}".
 *
 * The followings are the available columns in table '{{contentscommoninfo}}':
 * @property integer $ContentId
 * @property string $Author
 * @property string $ContentTime
 * @property string $PublishTime
 * @property string $ExpireTime
 * @property string $OverTitle
 * @property string $UnderTitle
 * @property string $ShortBody
 * @property string $BodyText
 * @property string $Footer
 *
 * The followings are the available model relations:
 * @property Contentinitialize $content
 */
class Contentscommoninfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contentscommoninfo the static model class
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
		return '{{contentscommoninfo}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ContentId', 'required'),
			array('ContentId', 'numerical', 'integerOnly'=>true),
			array('Author', 'length', 'max'=>100),
			array('OverTitle, UnderTitle', 'length', 'max'=>1024),
			array('ContentTime, PublishTime, ExpireTime, ShortBody, BodyText, Footer', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ContentId, Author, ContentTime, PublishTime, ExpireTime, OverTitle, UnderTitle, ShortBody, BodyText, Footer', 'safe', 'on'=>'search'),
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
			'Author' => 'Author',
			'ContentTime' => 'Content Time',
			'PublishTime' => 'Publish Time',
			'ExpireTime' => 'Expire Time',
			'OverTitle' => 'Over Title',
			'UnderTitle' => 'Under Title',
			'ShortBody' => 'Short Body',
			'BodyText' => 'Body Text',
			'Footer' => 'Footer',
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
		$criteria->compare('Author',$this->Author,true);
		$criteria->compare('ContentTime',$this->ContentTime,true);
		$criteria->compare('PublishTime',$this->PublishTime,true);
		$criteria->compare('ExpireTime',$this->ExpireTime,true);
		$criteria->compare('OverTitle',$this->OverTitle,true);
		$criteria->compare('UnderTitle',$this->UnderTitle,true);
		$criteria->compare('ShortBody',$this->ShortBody,true);
		$criteria->compare('BodyText',$this->BodyText,true);
		$criteria->compare('Footer',$this->Footer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}