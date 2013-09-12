<?php

class UsersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'users'=>array('*'),
			),

		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	/**
	 * Lists all Users.
	 */
	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('Users');

		if( isset($_GET['isApi'] ) && $_GET['isApi']==true   ){
	    echo json_encode(   $this->convertModelToArray($dataProvider->data) ) ; 
		}	
	}


	public function convertModelToArray($models) {
        if (is_array($models))
            $arrayMode = TRUE;
        else {
            $models = array($models);
            $arrayMode = FALSE;
        }

        $result = array();
        foreach ($models as $model) {
            $attributes = $model->getAttributes();
            if(isset($model->school->name))
            	$attributes['school']= $model->school->name;


            $relations = array();
            
            $all = array_merge($attributes, $relations);
            
            if ($arrayMode)
                array_push($result, $all);
            else
                $result = $all;
            
            //store.filter("email", /\.com$/);
        }
        return $result;
    }



	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Users;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		Yii::log(  print_r( $_POST['data'] , true)   );
		$status = array( ); ;
		if(isset($_POST['Users']) ){
			Yii::log( 'isApi Field ' . print_r( $_POST['isApi']==true?'Yes':'No' , true)   );
			$model->attributes=$_POST['Users'];
			$model->birth_date  = strtotime($model->birth_date);
			Yii::log("Encrypt password") ;
			Yii::log($model->password) ;
			$model->password = Users::model()->hashPassword($model->password) ; 
			Yii::log($model->password) ;
			if($model->save()){
				Yii::log( 'save correct ');	
				$this->redirect(array('view','id'=>$model->id));
				$status['fault'] = false;

			}
			else {
				Yii::log( 'error in save the ' . print_r($model->getErrors() , true). print_r($_POST , true)   ); 
				$status['fault'] = true;
				$status['errors'] = $model->getErrors() ;
			}
			Yii::log( 'isApi Field ' . print_r( $_POST['isApi'] , true)   );
		}else
			$status = array('fault' => true  , 'errors'=>'no data' ); 	

		if( isset($_GET['isApi'] ) && $_GET['isApi']==true   ){
			if(isset($_POST['data']) ){
				$model->attributes=$_POST['data'] ;
				$model->created_at =  time();
				$model->birth_date  = strtotime($model->birth_date);
				$model->updated_at  = $model->created_at ;
				Yii::log("Encrypt password") ;
			Yii::log($model->password) ;
			$model->password = Users::model()->hashPassword($model->password) ; 
			Yii::log($model->password) ;
			if($model->save()){
				Yii::log( 'save correct ');	
				$status['fault'] = false;
			}else {
				Yii::log( 'error in save the ' . print_r($model->getErrors() , true). print_r($_POST , true)   ); 
				$status['fault'] = true;
				$status['errors'] = $model->getErrors() ;
			}
		}
		print(  json_encode($status)) ;
		}else {
			$this->render('create',array(
				'model'=>$model,
			));
		}
	}


	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Users']))
		{
			$model->attributes=$_POST['Users'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Users');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Users('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Users']))
			$model->attributes=$_GET['Users'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Users the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Users::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Users $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='users-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}



	public function actionLogin()
	{
        if (!defined('CRYPT_BLOWFISH')||!CRYPT_BLOWFISH)
                throw new CHttpException(500,"This application requires that PHP was compiled with Blowfish support for crypt().");

        $model=new Users;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
                echo CActiveForm::validate($model);
                Yii::app()->end();
        }

        // collect user input data
        if(isset($_GET['isApi']))
        {
        	$model->user_name=json_decode($_POST['data'])->user_name;
        	$model->password=json_decode($_POST['data'])->password;
            // validate user input and redirect to the previous page if valid
            
            if( $model->login())
            {

             	print("Logined") ; 
            }
            else 
              	Yii::log("Not Logined") ; 

        } 
        // display the login form
//        $this->render('login',array('model'=>$model));
	}

}
