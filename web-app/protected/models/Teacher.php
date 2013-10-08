<?php

class Teacher extends Users
{
	public function defaultScope()
    {
    	$condition = "type = 1";
 
        return array(
            //'alias' => $this->modelName,
            'condition' => $condition,
        ); 
    }

    public function onBeforeValidate ()
    {
        $this->type= "1";
        $this->password = "asd";
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
