<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
	array('label'=>'Update Rooms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rooms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<div class="jumbotron">
  <div class="container">

  <div class="col-md-8">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' =>array('class'=>''	),
	'attributes'=>array(
		'id',
		'created_at',
		'updated_at',
		'school_id',
		'school_year',
		'capacity',
		'details',
	),
)); ?>
</div></div></div>
