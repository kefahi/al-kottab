<?php

class SchoolsController extends Controller
{
	public $layout='//layouts/api';

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionList()
	{
		$dataProvider=new CActiveDataProvider('Schools');

		if( isset($_GET['isApi'] ) && $_GET['isApi']==true   ){
	    echo json_encode(   $this->convertModelToArray($dataProvider->data) ) ; 
		}	
	}

	public function convertModelToArray($models) 
	{
        if (is_array($models))
            $arrayMode = TRUE;
        else {
            $models = array($models);
            $arrayMode = FALSE;
        }

        $result = array();
        foreach ($models as $model) {
            $attributes = $model->getAttributes();
            $relations = array();
            foreach ($model->relations() as $key => $related) {
                if ($model->hasRelated($key)) {
                    $relations[$key] = convertModelToArray($model->$key);
                }
            }
            $all = array_merge($attributes, $relations);

            if ($arrayMode)
                array_push($result, $all);
            else
                $result = $all;
        }
        return $result;
    }

    public function actionCreate()
	{
		$model=new Schools;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['data']))
		{
			$model->attributes=$_POST['data'];
			if($model->save()){
				echo 'Yes' ;
				//$this->redirect(array('view','id'=>$model->id));
			}else print_r($model->errors);
		}
			echo 'No' ;
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}