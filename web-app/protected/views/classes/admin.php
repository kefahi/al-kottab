<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'Create Classes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#classes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>الصفوف الدراسية</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'classes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array(
		'class'=>'CLinkPager',
		'htmlOptions'=>array('class'=>'pagination'),
		'header'=>'',
	),

	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'room_id',
		'grade_id',
		'school_id',
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"classes_{$data->id}"' , 'data-original-id'=>'$data->id','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
		),
		/*
		'capacity',
		'saturday',
		'sunday',
		'monday',
		'tuesday',
		'wednesday',
		'thrusday',
		'friday',
		*/
	),
)); ?>
<script>
	$('.glyphicon-new-window').click(function(id){ location.href = "/classes/view/"+$(this).attr('data-original-id');} ) ;
	$('#classes-grid table').addClass('table table-hover' );
	$('div > .pager').removeClass('pager ');
</script>