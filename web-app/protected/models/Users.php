<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $first_name
 * @property string $second_name
 * @property string $third_name
 * @property string $fourth_name
 * @property integer $gender
 * @property integer $birth_date
 * @property string $birth_location
 * @property string $address
 * @property string $mobiles
 * @property string $land_line
 * @property string $national_id
 * @property integer $national_id_type
 * @property integer $school_id
 * @property string $password
 * @property integer $type
 * @property integer $guardian_id
 * @property integer $class_id
 * @property integer $grade_id
 * @property string $student_data
 *
 * The followings are the available model relations:
 * @property Schools $school
 * @property Users $guardian
 * @property Users[] $users
 * @property Marks[] $marks
 * @property Marks[] $marks1
 * @property StudentClasses[] $studentClasses
 * @property StudentGrades[] $studentGrades
 * @property TeacherClasses[] $teacherClasses
 * @property Notifications[] $notifications
 * @property Messages[] $messages
 * @property Messages[] $messages1
 */
class Users extends CActiveRecord
{
	private $_identity = null;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name,id_string , created_at, updated_at, first_name, second_name, fourth_name, gender, birth_date, birth_location, address, national_id_type,  type,password,  ', 'required'),
			array('created_at, updated_at, gender, birth_date, national_id_type, school_id, type, guardian_id, class_id, grade_id', 'numerical', 'integerOnly'=>true),
			array('id_string, third_name, mobiles, land_line, national_id, password, student_data', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created_at, updated_at, first_name, second_name, third_name, fourth_name, gender, birth_date, birth_location, address, mobiles, land_line, national_id, national_id_type, school_id, password, type, guardian_id, class_id, grade_id, student_data', 'safe', 'on'=>'search'),
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
			'school' => array(self::BELONGS_TO, 'Schools', 'school_id'),
			'guardian' => array(self::BELONGS_TO, 'Users', 'guardian_id'),
			'users' => array(self::HAS_MANY, 'Users', 'guardian_id'),
			'marks' => array(self::HAS_MANY, 'Marks', 'student_id'),
			'marks1' => array(self::HAS_MANY, 'Marks', 'teacher_id'),
			'studentRequisit' => array(self::HAS_MANY, 'StudentRequisits', 'student_id'),
			'studentClasses' => array(self::HAS_MANY, 'StudentClasses', 'student_id'),
			'studentGrades' => array(self::HAS_MANY, 'StudentGrades', 'student_id'),
			'teacherClasses' => array(self::HAS_MANY, 'TeacherClasses', 'teacher_id'),
			'notifications' => array(self::HAS_MANY, 'Notifications', 'user_id'),
			'messages' => array(self::HAS_MANY, 'Messages', 'recipient_id'),
			'messages1' => array(self::HAS_MANY, 'Messages', 'sender_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'hلرقم الفريد',
			'created_at' => 'تاريخ الإنشاء',
			'updated_at' => 'اخر تحديث',
			'first_name' => 'الإسم الأول',
			'second_name' => 'الإسم الثاني',
			'third_name' => 'الإسم الثالث',
			'fourth_name' => 'الإسم الرابع',
			'gender' => 'الجنس',
			'birth_date' => 'تاريخ الولادة',
			'birth_location' => 'مكان الورادة',
			'address' => 'العنوان',
			'mobiles' => 'خولي',
			'land_line' => 'هاتف',
			'national_id' => 'الإثبات الشخصي',
			'national_id_type' => 'نوع الاثبات ',
			'school_id' => 'المدرسة',
			'password' => 'كلمة السر',
			'type' => 'نوع',
			'guardian_id' => 'ولي الأمر',
			'class_id' => 'الشعبة',
			'grade_id' => 'الصف',
			'student_data' => 'بيانات الطالب',
			'user_name' => 'اسم الدخول',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('second_name',$this->second_name,true);
		$criteria->compare('third_name',$this->third_name,true);
		$criteria->compare('fourth_name',$this->fourth_name,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('birth_date',$this->birth_date);
		$criteria->compare('birth_location',$this->birth_location,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobiles',$this->mobiles,true);
		$criteria->compare('land_line',$this->land_line,true);
		$criteria->compare('national_id',$this->national_id,true);
		$criteria->compare('national_id_type',$this->national_id_type);
		$criteria->compare('school_id',$this->school_id);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('guardian_id',$this->guardian_id);
		$criteria->compare('class_id',$this->class_id);
		$criteria->compare('grade_id',$this->grade_id);
		$criteria->compare('student_data',$this->student_data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	        /**
         * Generates a salt that can be used to generate a password hash.
         *
         * The {@link http://php.net/manual/en/function.crypt.php PHP `crypt()` built-in function}
         * requires, for the Blowfish hash algorithm, a salt string in a specific format:
         *  - "$2a$"
         *  - a two digit cost parameter
         *  - "$"
         *  - 22 characters from the alphabet "./0-9A-Za-z".
         *
         * @param int cost parameter for Blowfish hash algorithm
         * @return string the salt
         */
        protected function generateSalt($cost=10)
        {
                if(!is_numeric($cost)||$cost<4||$cost>31){
                        throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
                }
                // Get some pseudo-random data from mt_rand().
                $rand='';
                for($i=0;$i<8;++$i)
                        $rand.=pack('S',mt_rand(0,0xffff));
                // Add the microtime for a little more entropy.
                $rand.=microtime();
                // Mix the bits cryptographically.
                $rand=sha1($rand,true);
                // Form the prefix that specifies hash algorithm type and cost parameter.
                $salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
                // Append the random salt string in the required base64 format.
                $salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
                return $salt;
        }

                /**
         * Checks if the given password is correct.
         * @param string the password to be validated
         * @return boolean whether the password is valid
         */
        public function validatePassword($password)
        {
                return crypt($password,$this->password)===$this->password;
        }

        /**
         * Generates the password hash.
         * @param string password
         * @return string hash
         */
        public function hashPassword($password)
        {
                return crypt($password, $this->generateSalt());
        }

        /**
         * Logs in the user using the given username and password in the model.
         * @return boolean whether login is successful
         */
        public function login()
        {
            if($this->_identity===null)
            {
                    $this->_identity=new UserIdentity($this->user_name,$this->password);
                    $this->_identity->authenticate();
            }
            var_dump($this->_identity->errorCode) ; 
            var_dump(UserIdentity::ERROR_NONE  ) ;
            exit;
            if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
            {
            	    $duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
                    Yii::app()->user->login($this->_identity,$duration);
                    return true;

            }
            else
            {
                return false;
            }
        }


}
