<?php

/**
 * This is the model class for table "{{domains}}".
 *
 * The followings are the available columns in table '{{domains}}':
 * @property integer $Id
 * @property string $Language
 * @property string $Calture
 * @property string $Direction
 * @property string $URL
 * @property string $FlagURL
 * @property integer $StatusId
 *
 * The followings are the available model relations:
 * @property Categories[] $categories
 * @property Contentinitialize[] $contentinitializes
 * @property Status $status
 */
class Domains extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Domains the static model class
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
		return '{{domains}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Language, Calture, Direction, StatusId', 'required'),
			array('StatusId', 'numerical', 'integerOnly'=>true),
			array('Language', 'length', 'max'=>50),
			array('Calture', 'length', 'max'=>10),
			array('Direction', 'length', 'max'=>3),
			array('URL, FlagURL', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Language, Calture, Direction, URL, FlagURL, StatusId', 'safe', 'on'=>'search'),
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
			'categories' => array(self::HAS_MANY, 'Categories', 'DomainId'),
			'contentinitializes' => array(self::HAS_MANY, 'Contentinitialize', 'DomainId'),
			'status' => array(self::BELONGS_TO, 'Status', 'StatusId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'Language' => 'Language',
			'Calture' => 'Calture',
			'Direction' => 'Direction',
			'URL' => 'Url',
			'FlagURL' => 'Flag Url',
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
		$criteria->compare('Language',$this->Language,true);
		$criteria->compare('Calture',$this->Calture,true);
		$criteria->compare('Direction',$this->Direction,true);
		$criteria->compare('URL',$this->URL,true);
		$criteria->compare('FlagURL',$this->FlagURL,true);
		$criteria->compare('StatusId',$this->StatusId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}