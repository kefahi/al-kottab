<?php

/**
 * This is the model class for table "schools".
 *
 * The followings are the available columns in table 'schools':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $name
 * @property string $description
 * @property string $address
 * @property string $phones
 * @property string $notes
 * @property integer $admin_id
 *
 * The followings are the available model relations:
 * @property Users[] $users
 * @property Marks[] $marks
 * @property Classes[] $classes
 */
class Schools extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'schools';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at, name, description, address, phones, admin_id', 'required'),
			array('created_at, updated_at, admin_id', 'numerical', 'integerOnly'=>true),
			array('notes', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, name, description, address, phones, notes, admin_id', 'safe', 'on'=>'search'),
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
		'users' => array(self::HAS_MANY, 'Users', 'school_id'),
	'admin' => array(self::BELONGS_TO, 'Users', 'admin_id'),
			'marks' => array(self::HAS_MANY, 'Marks', 'school_id'),
			'classes' => array(self::HAS_MANY, 'Classes', 'school_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'الرقم الفريد',
			'created_at' => 'تاريخ التسجيل',
			'updated_at' => 'اخر تحديث',
			'name' => 'الإسم',
			'description' => 'الوصف',
			'address' => 'العنوان',
			'phones' => 'الهاتف',
			'notes' => 'ملاحظات',
			'admin_id' => 'Admin',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phones',$this->phones,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('admin_id',$this->admin_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Schools the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


	public static function getList()
	{
		$data = self::model()->search()->data;
		$result = array();
		foreach ($data as $value) {
			$result[$value->id] = $value->name ;			
		}
		return $result ;
	}
}
