<?php
/* @var $this TeacherClassesController */
/* @var $model TeacherClasses */

$this->breadcrumbs=array(
	'Teacher Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeacherClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherClasses', 'url'=>array('create')),
	array('label'=>'Update TeacherClasses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherClasses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherClasses', 'url'=>array('admin')),
);
?>

<h1>View TeacherClasses #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'class_id',
		'grade_id',
		'created_at',
		'updated_at',
		'school_year',
		'notes',
	),
)); ?>
