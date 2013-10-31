<?php
/* @var $this BusesController */
/* @var $model Buses */

$this->breadcrumbs=array(
	'باصات'=>array('index'),
	
);

$this->menu=array(
	array('label'=>'List Buses', 'url'=>array('index')),
	array('label'=>'Create Buses', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#buses-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>الباصات
<button type="button" class="btn btn-primary btn-lg pull-left" onclick="window.location='/buses/create'" >اضافة</button>
</h1>


<?php // echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="clearfix"></div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'htmlOptions'=>array('class'=>'table table-hover'),
	'id'=>'buses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'selectionChanged'=>'function(id){ location.href = "'.$this->createUrl('/buses/view').'?id="+$.fn.yiiGridView.getSelection(id);}',
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'route_go',
		'route_back',
		'drivers',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>


<script>
$('.glyphicon-new-window').popover(
{
	trigger: 'hover',
	html: true,
	placement: 'left',
	content:function(){
		var html = '<a class="glyphicon glyphicon-new-window input-group" href=/buses/?school_id='+  $(this).attr('data-original-id') +' > الطلاب </a>'    ;
		return html;
	} 
});
$('#Buses-grid table').addClass('table table-hover' );
</script>