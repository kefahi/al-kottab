<?php

/**
 * This is the model class for table "buses".
 *
 * The followings are the available columns in table 'buses':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $route_go
 * @property string $route_back
 * @property string $drivers
 */
class Buses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, route_go, route_back, drivers', 'required'),
			array('created_at, updated_at', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, route_go, route_back, drivers', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'الرقم',
			'created_at' => 'تاريخ الإنشاء',
			'updated_at' => 'اخر تعديل',
			'route_go' => 'طريق الذهاب',
			'route_back' => 'طريق الإياب',
			'drivers' => 'السائق',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);
		$criteria->compare('route_go',$this->route_go,true);
		$criteria->compare('route_back',$this->route_back,true);
		$criteria->compare('drivers',$this->drivers,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
