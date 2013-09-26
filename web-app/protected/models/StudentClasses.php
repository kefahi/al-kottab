<?php

/**
 * This is the model class for table "student_classes".
 *
 * The followings are the available columns in table 'student_classes':
 * @property integer $student_id
 * @property integer $class_id
 * @property integer $grade_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $school_year
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Classes $class
 * @property Users $student
 */
class StudentClasses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_classes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, class_id, grade_id, created_at, updated_at, school_year, notes', 'required'),
			array('student_id, class_id, grade_id, created_at, updated_at, school_year', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, class_id, grade_id, created_at, updated_at, school_year, notes', 'safe', 'on'=>'search'),
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
			'class' => array(self::BELONGS_TO, 'Classes', 'class_id'),
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
			'class_id' => 'Class',
			'grade_id' => 'Grade',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'school_year' => 'School Year',
			'notes' => 'Notes',
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
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('grade_id',$this->grade_id);
		$criteria->compare('created_at',$this->created_at);
		$criteria->compare('updated_at',$this->updated_at);
		$criteria->compare('school_year',$this->school_year);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StudentClasses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
