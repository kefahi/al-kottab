<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id
 * @property string $user_name
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
 * @property Marks[] $marks
 * @property Marks[] $marks1
 * @property StudentClasses[] $studentClasses
 * @property StudentGrades[] $studentGrades
 * @property TeacherClasses[] $teacherClasses
 * @property Notifications[] $notifications
 * @property Messages[] $messages
 * @property Messages[] $messages1
 * @property Schools $school
 * @property Student $guardian
 * @property Student[] $users
 */
class Student extends Users
{

    public function defaultScope()
    {
    	$condition = "type = 4";
 
        return array(
            //'alias' => $this->modelName,
            'condition' => $condition,
        ); 
    }

    public function onBeforeValidate ()
    {
        $this->type= "4";
        $model->created_at = $model->updated_at = time();   
        $model->password = "asd";
        
        return parent::beforeSave() ;
    }


    

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Student the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
