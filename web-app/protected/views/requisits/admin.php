<?php
/* @var $this RequisitsController */
/* @var $model Requisits */

$this->breadcrumbs=array(
	'Requisits'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Requisits', 'url'=>array('index')),
	array('label'=>'Create Requisits', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#requisits-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Requisits</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'requisits-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'teacher_id',
		'grade_id',
		'marks_credit',
		'due_date',
		'title',
		/*
		'description',
		'type',
		'attachements',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
