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

<h1>Manage Schools</h1>



<div class="panel panel-default">
<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'htmlOptions'=>array('class'=>'table'),
	//''=>'table' ,
	'id'=>'schools-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
</div>

	<script src="/bootstrap/js/tooltip.js"></script>
	<script src="/bootstrap/js/popover.js"></script>

<script>
$('.glyphicon-new-window').popover(
{
	trigger: 'click',
	html: true,
	placement: 'left',
	content:function(){
		var html = '<a class="glyphicon glyphicon-new-window input-group" href=/student/?school='+  $(this).attr('data-original-id') +' > الطلاب </a>'    ;
		return html;
	} 
});
</script>
