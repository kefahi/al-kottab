<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subjects', 'url'=>array('index')),
	array('label'=>'Create Subjects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subjects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>المقررات</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subjects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('class'=>'pagination'),
	'pager'=>array(
		'class'=>'CLinkPager',
		'header'=>'',
		),
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'name',
		'description',
		'class_id',
		/*
		'id_string',
		*/
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"subject_{$data->id}"' , 'data-original-id'=>'$data->id', 'data-original-title'=>' $data->name  ','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
		),
	),
)); ?>
</div>
<script>
$('.glyphicon-new-window').click(function(id){ location.href = "/subjects/view/"+$(this).attr('data-original-id');} ) ;
$('#subjects-grid table').addClass('table table-hover' );
$('div > .pager').removeClass('pager ');
</script>