<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Create Teacher', 'url'=>array('create')),
	array('label'=>'Update Teacher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Teacher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Teacher', 'url'=>array('admin')),
);
?>

<h1>View Teacher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user_name',
		'created_at',
		'updated_at',
		'first_name',
		'second_name',
		'third_name',
		'fourth_name',
		'gender',
		'birth_date',
		'birth_location',
		'address',
		'mobiles',
		'land_line',
		'national_id',
		'national_id_type',
		'school_id',
		'password',
		'type',
		'guardian_id',
		'class_id',
		'grade_id',
		'student_data',
	),
)); ?>
