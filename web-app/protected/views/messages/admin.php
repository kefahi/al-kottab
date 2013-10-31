<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'الرسائل'
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	array('label'=>'Create Messages', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#messages-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




<div class="">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'messages-grid',
	'dataProvider'=>$model->search(),
	'htmlOptions'=>array('class'=>'table'),
	'filter'=>$model,
	'columns'=>array(
		'created_at',
		'priority',
		'sender_id',
		'subject',
		/*
		'recipient_id',
		'body',
		'subject',
		'delivery_status',
		'delivery_method',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>