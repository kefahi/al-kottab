<?php
/* @var $this ClassesController */
/* @var $model Classes */

// $this->breadcrumbs=array(
// 	'الشعب'=>array('admin'),
// 	'إدارة',
// );

$this->menu=array(
	array('label'=>'List Classes', 'url'=>array('index')),
	array('label'=>'إنشاء صف دراسي', 'url'=>array('create')),
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
<div class="white"  style="padding:25px">
	<h1>الشعب الدراسية</h1>

	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'classes-grid',
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
			'created_at',
			'updated_at',
			'room_id',
			'grade_id',
			// array(
	  //           'class'=>'DataColumn',
	  //           'evaluateHtmlOptions'=>true,
	 	// 		'value'=>'',
			// 	'htmlOptions'=>array('id'=> '"classes_{$data->id}"' , 'data-original-id'=>'$data->id','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
			// ),
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
</div>