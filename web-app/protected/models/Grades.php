<?php

/**
 * This is the model class for table "grades".
 *
 * The followings are the available columns in table 'grades':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $school_id
 * @property string $name
 * @property integer $ordinal
 * @property integer $cgroup
 *
 * The followings are the available model relations:
 * @property Marks[] $marks
 * @property Classes[] $classes
 * @property StudentGrades[] $studentGrades
 * @property Schools $school
 */
class Grades extends CActiveRecord
{
	private $CGroupList  = array('1'=>'حضانة' , '2'=>'أساسي' ,'4'=> 'ابتدائي', '8'=>'إعدادي', '16'=>'ثانوي'  ) ;
	private $OrdinalList  = array('1'=>'الأول', '2'=>'الثاني', '4'=>'الثالث', '8'=>'الرابع', '16'=>'الخامس', '32'=>'السادس', '64'=>'السابع', '128'=>'الثامن', '256'=>'التاسع', '512'=>'العاشر')  ;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, school_id, name, ordinal, cgroup', 'required'),
			array('created_at, updated_at, school_id, ordinal, cgroup', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, school_id, name, ordinal, cgroup', 'safe', 'on'=>'search'),
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
			'marks' => array(self::HAS_MANY, 'Marks', 'grade_id'),
			'classes' => array(self::HAS_MANY, 'Classes', 'grade_id'),
			'studentGrades' => array(self::HAS_MANY, 'StudentGrades', 'grade_id'),
			'school' => array(self::BELONGS_TO, 'Schools', 'school_id'),
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
			'updated_at' => 'اخر تدحديث',
			'school_id' => 'المدرسة',
			'name' => 'الإسم',
			'ordinal' => 'الترتيب',
			'cgroup' => 'المجموعة الدراسية',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('ordinal',$this->ordinal);
		$criteria->compare('cgroup',$this->cgroup);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getOrdinal(){
		return $this->OrdinalList[$this->ordinal];
	}

	public function getCGroup(){
		return $this->CGroupList[$this->ordinal];
	}

	public function onBeforeValidate ()
    {
        $this->created_at = time();   
        return parent::beforeSave() ;
    }

    public static function getList($school_id = null)
	{
		if(!isset($school_id ))
			$school_id  = Users::model()->findByPk(Yii::app()->user->id)->school_id ;
		$model = self::model();
		$model->school_id = $school_id;

		$data =	$model->search()->data;
		$result = array();
		foreach ($data as $value) {
			$result[$value->id] = $value->name ;			
		}
		return $result ;
	}
}