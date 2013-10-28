<?php

/**
 * This is the model class for table "student_grades".
 *
 * The followings are the available columns in table 'student_grades':
 * @property integer $student_id
 * @property integer $grade_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $school_year
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Grades $grade
 * @property Users $student
 */
class StudentGrades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'student_grades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, grade_id, created_at, updated_at, school_year, notes', 'required'),
			array('student_id, grade_id, created_at, updated_at, school_year', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('student_id, grade_id, created_at, updated_at, school_year, notes', 'safe', 'on'=>'search'),
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
			'grade' => array(self::BELONGS_TO, 'Grades', 'grade_id'),
			'student' => array(self::BELONGS_TO, 'Users', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'student_id' => 'الطاب',
			'grade_id' => 'الصف',
			'created_at' => 'تاريخ الإنشاء',
			'updated_at' => 'اخر تحديث',
			'school_year' => 'السنة الدراسية',
			'notes' => 'ملاحظات',
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
	 * @return StudentGrades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
