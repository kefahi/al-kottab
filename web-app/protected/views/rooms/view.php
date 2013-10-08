<?php
/* @var $this RoomsController */
/* @var $model Rooms */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rooms', 'url'=>array('index')),
	array('label'=>'Create Rooms', 'url'=>array('create')),
	array('label'=>'Update Rooms', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rooms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rooms', 'url'=>array('admin')),
);
?>

<div class="jumbotron">
	<div class="container">
		<div class="col-md-8">
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'htmlOptions' =>array('class'=>''	),
				'attributes'=>array(
					'capacity',
					'details',
					array('label'=>$model->attributeLabels()['school_id'] , 'value' => (isset($model->school->name))?$model->school->name:'غير محدد' ),
					array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
					array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),
				),
			)); ?>
		</div>
		<div class="col-md-2" >
			<p>
			  <button type="button" class="btn btn-info"  onclick='$.ajax({url: "/student/adminGrid?school_id=<?php echo $model->id?>", complete: function(result) {  $( "#data-area" ).html( result.responseText ); move_to_div(); }} );' >الطلاب </button>
			 </p><p>
			  <button type="button" class="btn btn-info disabled ">المعلمين</button>
			</p><p>
			  <button type="button" class="btn btn-info disabled">الإداريين</button>
			</p><p>
			  <button type="button" class="btn btn-info "  onclick='$.ajax({url: "/grades/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' >المراحل الصفية</button>
			</p><p>
			  <button type="button" class="btn btn-info "  onclick='$.ajax({url: "/rooms/adminGrid?room_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' >الغرف الصفية</button>
			</p><p>
			  <button type="button" class="btn btn-info "  onclick='$.ajax({url: "/classes/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' >الصفوف </button>
			</p>
		</div>

		<div class="col-md-2" >
			<p>
			  <button type="button" class="btn btn-info" onclick="location.href ='/student/create';"  > ادخال طالب جديد </button>
			 </p><p>
			  <button type="button" class="btn btn-info disabled ">ادخال معلم</button>
			</p><p>
			  <button type="button" class="btn btn-info" onclick="location.href ='/grades/create';">ادخال مرحلة دراسية</button>
			</p>
			<p>
			  <button type="button" class="btn btn-info" onclick="location.href ='/room/create';">ادخال شعبة</button>
			</p><p>
			  <button type="button" class="btn btn-info" onclick="location.href ='/classes/create';">ادخال صف دراسي</button>
			</p>
		</div>
	</div>
</div>
<div id='data-area' >  </div>