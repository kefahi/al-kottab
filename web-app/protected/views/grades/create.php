<?php
/* @var $this GradesController */
/* @var $model Grades */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Grades', 'url'=>array('index')),
	array('label'=>'Manage Grades', 'url'=>array('admin')),
);
?>

<h1>الصفوف</h1>
<p>ادخال صف جديد</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>