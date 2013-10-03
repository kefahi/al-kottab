<?php

/**
 * This is the model class for table "student_requisits".
 *
 * The followings are the available columns in table 'student_requisits':
 * @property integer $student_id
 * @property integer $requisit_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $earned_marks
 * @property string $attachements
 *
 * The followings are the available model relations:
 * @property Requisits $requisit
 * @property Users $student
 */
class StudentRequisits extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_requisits';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, requisit_id, created_at, updated_at', 'required'),
			array('student_id, requisit_id, created_at, updated_at, earned_marks', 'numerical', 'integerOnly'=>true),
			array('attachements', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, requisit_id, created_at, updated_at, earned_marks, attachements', 'safe', 'on'=>'search'),
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
			'requisit' => array(self::BELONGS_TO, 'Requisits', 'requisit_id'),
			'student' => array(self::BELONGS_TO, 'Users', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'student_id' => 'Student',
			'requisit_id' => 'Requisit',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'earned_marks' => 'Earned Marks',
			'attachements' => 'Attachements',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('requisit_id',$this->requisit_id);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);
		$criteria->compare('earned_marks',$this->earned_marks);
		$criteria->compare('attachements',$this->attachements,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentRequisits the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
