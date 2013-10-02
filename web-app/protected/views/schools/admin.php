<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#schools-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 > المددارس </h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'htmlOptions'=>array('class'=>'table table-hover'),
	//''=>'table' ,
	'id'=>'schools-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectionChanged'=>'function(id){ location.href = "'.$this->createUrl('/schools/view').'?id="+$.fn.yiiGridView.getSelection(id);}',
	'columns'=>array(
		'created_at',
		'updated_at',
		'name',
		'description',
		'address',
		/*
		'phones',
		'notes',
		'admin_id',
		*/
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"school_{$data->id}"' , 'data-original-id'=>'$data->id', 'data-original-title'=>'$data->name','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
		),
	),
)); ?>


<!-- <script src="/bootstrap/js/tooltip.js"></script>
<script src="/bootstrap/js/popover.js"></script>
 -->
<script>
$('.glyphicon-new-window').popover(
{
	trigger: 'hover',
	html: true,
	placement: 'left',
	content:function(){
		var html = '<a class="glyphicon glyphicon-new-window input-group" href=/student/?school_id='+  $(this).attr('data-original-id') +' > الطلاب </a>'    ;
		return html;
	} 
});
$('#schools-grid table').addClass('table table-hover' );
</script>