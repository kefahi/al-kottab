<?php
/* @var $this RequisitsController */
/* @var $model Requisits */

$this->breadcrumbs=array(
	'Requisits'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Requisits', 'url'=>array('index')),
	array('label'=>'Create Requisits', 'url'=>array('create')),
	array('label'=>'Update Requisits', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Requisits', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Requisits', 'url'=>array('admin')),
);
?>

<h1>View Requisits #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'teacher_id',
		'grade_id',
		'marks_credit',
		'due_date',
		'title',
		'description',
		'type',
		'attachements',
	),
)); ?>
