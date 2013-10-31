<?php
/* @var $this TeacherClassesController */
/* @var $model TeacherClasses */

$this->breadcrumbs=array(
	'Teacher Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherClasses', 'url'=>array('index')),
	array('label'=>'Manage TeacherClasses', 'url'=>array('admin')),
);
?>

<h1>Create TeacherClasses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>