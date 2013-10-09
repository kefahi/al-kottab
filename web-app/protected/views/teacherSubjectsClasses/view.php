<?php
/* @var $this TeacherSubjectsClassesController */
/* @var $model TeacherSubjectsClasses */

$this->breadcrumbs=array(
	'Teacher Subjects Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TeacherSubjectsClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherSubjectsClasses', 'url'=>array('create')),
	array('label'=>'Update TeacherSubjectsClasses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TeacherSubjectsClasses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TeacherSubjectsClasses', 'url'=>array('admin')),
);
?>

<h1>View TeacherSubjectsClasses #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subjects_id',
		'class_id',
		'grade_id',
		'teacher_id',
		'created_at',
		'updated_at',
		'school_year',
		'notes',
	),
)); ?>
