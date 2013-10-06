<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'Create Classes', 'url'=>array('create')),
	array('label'=>'Update Classes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Classes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classes', 'url'=>array('admin')),
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
		
		array('label'=>$model->attributeLabels()['room_id'] , 'value' =>  $model->room->details),
		array('label'=>$model->attributeLabels()['grade_id'] , 'value' =>  $model->grade->name),
		'capacity',
		array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
		array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),

	),
)); ?>

</div></div></div>