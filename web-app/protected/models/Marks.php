<?php

/**
 * This is the model class for table "marks".
 *
 * The followings are the available columns in table 'marks':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $school_id
 * @property integer $grade_id
 * @property integer $class_id
 * @property integer $teacher_id
 * @property integer $student_id
 * @property integer $school_year
 *
 * The followings are the available model relations:
 * @property Users $student
 * @property Users $teacher
 * @property Classes $class
 * @property Grades $grade
 * @property Schools $school
 */
class Marks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, school_id, grade_id, class_id, teacher_id, student_id, school_year', 'required'),
			array('created_at, updated_at, school_id, grade_id, class_id, teacher_id, student_id, school_year', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, school_id, grade_id, class_id, teacher_id, student_id, school_year', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Users', 'student_id'),
			'teacher' => array(self::BELONGS_TO, 'Users', 'teacher_id'),
			'class' => array(self::BELONGS_TO, 'Classes', 'class_id'),
			'grade' => array(self::BELONGS_TO, 'Grades', 'grade_id'),
			'school' => array(self::BELONGS_TO, 'Schools', 'school_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
			'school_id' => 'School',
			'grade_id' => 'Grade',
			'class_id' => 'Class',
			'teacher_id' => 'Teacher',
			'student_id' => 'Student',
			'school_year' => 'School Year',
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
		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('grade_id',$this->grade_id);
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('school_year',$this->school_year);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
