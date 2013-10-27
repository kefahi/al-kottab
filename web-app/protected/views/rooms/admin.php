<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
); ?>

<h1>الغرف الصفية</h1>
<div class="panel panel-default">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rooms-grid',
	'htmlOptions'=>array('class'=>'pagination'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'created_at',
		'updated_at',
		'school_id',
		'capacity',
		/*
		'details',
		*/		
	),
)); 

?>
</div>
<script>
 $('.glyphicon-new-window').click(function(id){ location.href = "/rooms/view/"+$(this).attr('data-original-id');} ) ;

 //.popover(
// {
// 	trigger: 'click',
// 	html: true,
// 	placement: 'left',
// 	width:'100px',
// 	content:function(){
// 		$('.glyphicon-new-window').popover("hide");
// 		var html = '<a class="btn  " href=/messages/create/?recipient_id='+  $(this).attr('data-original-id') +' > إرسال رسالة </a>'    ;
// 		html += '<br/> <a class="btn " href=/marks/?student_id='+  $(this).attr('data-original-id') +' > العلامات </a>'    ;
// 		html += '<br/> <a class="btn " href=/student/academicStat/?student_id='+  $(this).attr('data-original-id') +' > الوضع المالي </a>'    ;
// 		html += '<br/> <a class="btn " href=/student/financialStat/?student_id='+  $(this).attr('data-original-id') +' > الوضع الأكاديمي	 </a>'    ;
// 		return html;
// 	} 
// });
$('#rooms-grid table').addClass('table table-hover' );
$('div > .pager').removeClass('pager ');
</script>