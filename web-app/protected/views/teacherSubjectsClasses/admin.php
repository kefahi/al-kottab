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

?>

<div class="panel panel-default">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'teacher-subjects-classes-grid',
		'dataProvider'=>$model->search(),
		'htmlOptions'=>array('class'=>''),
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
</div>