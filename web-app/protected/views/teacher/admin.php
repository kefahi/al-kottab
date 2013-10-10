<?php
/* @var $this TeacherController */
/* @var $model Teacher */

$this->breadcrumbs=array(
	'Teachers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Teacher', 'url'=>array('index')),
	array('label'=>'Create Teacher', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#teacher-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Teachers</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'teacher-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('class'=>''),
	'pager'=>array(
		'class'=>'CLinkPager',
		'htmlOptions'=>array('class'=>'pagination'),
		'header'=>'',
	),
	'columns'=>array(
		'id',
		'user_name',
		'created_at',
		'updated_at',
		'first_name',
		'second_name',
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"classes_{$data->id}"' , 'data-original-id'=>'$data->id','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
		),
		/*
		'third_name',
		'fourth_name',
		'gender',
		'birth_date',
		'birth_location',
		'address',
		'mobiles',
		'land_line',
		'national_id',
		'national_id_type',
		'school_id',
		'password',
		'type',
		'guardian_id',
		'class_id',
		'grade_id',
		'student_data',
		*/
		
	),
)); ?>
