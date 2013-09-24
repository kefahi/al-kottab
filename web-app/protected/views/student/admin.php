<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#student-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Students</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<div class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'student-grid',
	'htmlOptions'=>array('class'=>'table'),

	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'second_name',
		array(
			'name'=>'school_id',
			'value'=>'isset($data->school->name)?$data->school->name:""',
		),
		array(
            'class'=>'DataColumn',
            'evaluateHtmlOptions'=>true,
 			'value'=>'',
			'htmlOptions'=>array('id'=> '"student_{$data->id}"' , 'data-original-id'=>'$data->id', 'data-original-title'=>' $data->first_name . "	" . $data->fourth_name ','class'=>' glyphicon glyphicon-new-window input-group toggle'  ),
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
	width:'100px',
	content:function(){
		$('.glyphicon-new-window').popover("hide");
		var html = '<a class="btn  " href=/message/?recipient_id='+  $(this).attr('data-original-id') +' > إرسال رسالة </a>'    ;
		html += '<br/> <a class="btn " href=/marks/?student_id='+  $(this).attr('data-original-id') +' > العلامات </a>'    ;
		html += '<br/> <a class="btn " href=/student/academicStat/?student_id='+  $(this).attr('data-original-id') +' > الوضع المالي </a>'    ;
		html += '<br/> <a class="btn " href=/student/financialStat/?student_id='+  $(this).attr('data-original-id') +' > الوضع الأكاديمي	 </a>'    ;
		return html;
	} 
});
</script>
