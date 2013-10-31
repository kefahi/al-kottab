<?php

/**
 * This is the model class for table "requisits".
 *
 * The followings are the available columns in table 'requisits':
 * @property integer $id
 * @property integer $teacher_id
 * @property integer $grade_id
 * @property integer $marks_credit
 * @property integer $due_date
 * @property string $title
 * @property string $description
 * @property integer $type
 * @property string $attachements
 *
 * The followings are the available model relations:
 * @property Users $teacher
 * @property StudentRequisits[] $studentRequisits
 */
class Requisits extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'requisits';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teacher_id, grade_id, due_date, type', 'required'),
			array('teacher_id, grade_id, marks_credit, due_date, type', 'numerical', 'integerOnly'=>true),
			array('title, description, attachements', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, teacher_id, grade_id, marks_credit, due_date, title, description, type, attachements', 'safe', 'on'=>'search'),
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
			'teacher' => array(self::BELONGS_TO, 'Users', 'teacher_id'),
			'studentRequisits' => array(self::HAS_MANY, 'StudentRequisits', 'requisit_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'الرقم',
			'teacher_id' => 'المعلم',
			'grade_id' => 'العلامة',
			'marks_credit' => 'العلامة الممنوحة',
			'due_date' => 'التاريخ',
			'title' => 'العنوان',
			'description' => 'شرح',
			'type' => 'النوع',
			'attachements' => 'مرفقات',
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
		$criteria->compare('teacher_id',$this->teacher_id);
		$criteria->compare('grade_id',$this->grade_id);
		$criteria->compare('marks_credit',$this->marks_credit);
		$criteria->compare('due_date',$this->due_date);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('attachements',$this->attachements,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Requisits the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
