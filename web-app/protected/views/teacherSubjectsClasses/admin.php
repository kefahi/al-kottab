<?php
/* @var $this TeacherSubjectsClassesController */
/* @var $model TeacherSubjectsClasses */

$this->breadcrumbs=array(
	'Teacher Subjects Classes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TeacherSubjectsClasses', 'url'=>array('index')),
	array('label'=>'Create TeacherSubjectsClasses', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#teacher-subjects-classes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teacher Subjects Classes</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-subjects-classes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'subjects_id',
		'class_id',
		'grade_id',
		'teacher_id',
		'created_at',
		/*
		'updated_at',
		'school_year',
		'notes',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
