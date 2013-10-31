<?php
/* @var $this TeacherSubjectsClassesController */
/* @var $model TeacherSubjectsClasses */

$this->breadcrumbs=array(
	'Teacher Subjects Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeacherSubjectsClasses', 'url'=>array('index')),
	array('label'=>'Manage TeacherSubjectsClasses', 'url'=>array('admin')),
);
?>

<h1>Create TeacherSubjectsClasses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>