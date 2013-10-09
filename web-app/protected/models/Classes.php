<?php

/**
 * This is the model class for table "classes".
 *
 * The followings are the available columns in table 'classes':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $room_id
 * @property integer $grade_id
 * @property integer $school_id
 * @property integer $capacity
 * @property string $saturday
 * @property string $sunday
 * @property string $monday
 * @property string $tuesday
 * @property string $wednesday
 * @property string $thrusday
 * @property string $friday
 *
 * The followings are the available model relations:
 * @property Marks[] $marks
 * @property Schools $school
 * @property Rooms $room
 * @property Grades $grade
 * @property StudentClasses[] $studentClasses
 * @property TeacherClasses[] $teacherClasses
 * @property SubjectsClasses[] $subjectsClasses
 */
class Classes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'classes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, room_id, grade_id, school_id, capacity', 'required'),
			array('created_at, updated_at, room_id, grade_id, school_id, capacity', 'numerical', 'integerOnly'=>true),
			array('saturday, sunday, monday, tuesday, wednesday, thrusday, friday', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, room_id, grade_id, school_id, capacity, saturday, sunday, monday, tuesday, wednesday, thrusday, friday', 'safe', 'on'=>'search'),
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
			'marks' => array(self::HAS_MANY, 'Marks', 'class_id'),
			'school' => array(self::BELONGS_TO, 'Schools', 'school_id'),
			'room' => array(self::BELONGS_TO, 'Rooms', 'room_id'),
			'grade' => array(self::BELONGS_TO, 'Grades', 'grade_id'),
			'studentClasses' => array(self::HAS_MANY, 'StudentClasses', 'class_id'),
			'teacherClasses' => array(self::HAS_MANY, 'TeacherClasses', 'class_id'),
			'subjectsClasses' => array(self::HAS_MANY, 'SubjectsClasses', 'class_id'),
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
			'room_id' => 'Room',
			'grade_id' => 'Grade',
			'school_id' => 'School',
			'capacity' => 'Capacity',
			'saturday' => 'Saturday',
			'sunday' => 'Sunday',
			'monday' => 'Monday',
			'tuesday' => 'Tuesday',
			'wednesday' => 'Wednesday',
			'thrusday' => 'Thrusday',
			'friday' => 'Friday',
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
		$criteria->compare('room_id',$this->room_id);
		$criteria->compare('grade_id',$this->grade_id);
		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('capacity',$this->capacity);
		$criteria->compare('saturday',$this->saturday,true);
		$criteria->compare('sunday',$this->sunday,true);
		$criteria->compare('monday',$this->monday,true);
		$criteria->compare('tuesday',$this->tuesday,true);
		$criteria->compare('wednesday',$this->wednesday,true);
		$criteria->compare('thrusday',$this->thrusday,true);
		$criteria->compare('friday',$this->friday,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Classes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
