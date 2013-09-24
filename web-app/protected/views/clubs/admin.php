<?php
/* @var $this ClubsController */
/* @var $model Clubs */

$this->breadcrumbs=array(
	'Clubs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Clubs', 'url'=>array('index')),
	array('label'=>'Create Clubs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clubs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clubs</h1>

<body dir=rtl

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clubs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'name',
		'description',
		'restrictions',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
