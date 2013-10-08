<?php
/* @var $this GradesController */
/* @var $model Grades */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Grades', 'url'=>array('index')),
	array('label'=>'Create Grades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>إدارة الصفوف</h1>

<body dir=rtl >

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'grades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'htmlOptions'=>array('class'=>'table table-hover'),
	'selectionChanged'=>'function(id){alert("s"); location.href = "'.$this->createUrl('/grades/view').'?id="+$.fn.yiiGridView.getSelection(id);}',
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'name',
		'ordinal',
		'cgroup',
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"student_{$data->id}"' , 'data-original-id'=>'$data->id', 'class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
		)
	),
)); ?>

<script>
$('#grades-grid table').addClass('table table-hover' ); 
$('.pager').removeClass('pager ');
$('.glyphicon-new-window').click(function(id){ location.href = "/Rooms/view/"+$(this).attr('data-original-id');} ) ;

</script>


