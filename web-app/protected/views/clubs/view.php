<?php
/* @var $this ClubsController */
/* @var $model Clubs */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Clubs', 'url'=>array('index')),
	array('label'=>'Create Clubs', 'url'=>array('create')),
	array('label'=>'Update Clubs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Clubs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clubs', 'url'=>array('admin')),
);
?>

<h1>View Clubs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'created_at',
		'updated_at',
		'name',
		'description',
		'restrictions',
	),
)); ?>
