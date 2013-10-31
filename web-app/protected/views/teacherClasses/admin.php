<?php
/* @var $this TeacherClassesController */
/* @var $model TeacherClasses */

$this->breadcrumbs=array(
	'Teacher Classes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TeacherClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherClasses', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#teacher-classes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teacher Classes</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-classes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'teacher_id',
		'class_id',
		'grade_id',
		'created_at',
		'updated_at',
		/*
		'school_year',
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
