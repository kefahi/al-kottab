<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	$model->name => array('/'),
);

$this->menu=array(
	array('label'=>'List Schools', 'url'=>array('index')),
	array('label'=>'Create Schools', 'url'=>array('create')),
	array('label'=>'Update Schools', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schools', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schools', 'url'=>array('admin')),
);
?>

<!-- <h1><?php echo $model->name; ?></h1>
<p class=lead ><?php echo  $model->description  ; ?> </p> -->
<div class="jumbotron">
  <div class="container">
<div class="col-md-12">
  <div class="col-md-6">
  <h1>  <?php echo $model->name ;?> </h1>
    <p><?php echo $model->description ;?> </p>
  
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions' =>array('class'=>''	),
			'attributes'=>array(
				'address',
				'phones',
				'notes',
				array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
				array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),
				// array('label'=>'المحرر' , 'value' => $model->admin->first_name  .' ' . $model->admin->fourth_name),				
			))); ?>
	</div>
	

		
		  <button type="button" class=" btn "  onclick='$.ajax({url: "/student/adminGrid?school_id=<?php echo $model->id?>", complete: function(result) {  $( "#data-area" ).html( result.responseText ); move_to_div(); }} );' >الطلاب </button>
	
		  <button type="button" class="btn "  onclick='$.ajax({url: "/teacher/adminGrid?school_id=<?php echo $model->id?>", complete: function(result) {  $( "#data-area" ).html( result.responseText ); move_to_div(); }} );'  >المعلمين</button>
	
		  <button type="button" class=" btn "  onclick='$.ajax({url: "/grades/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' >المراحل الصفية</button>
	
		  <button type="button" class=" btn "  onclick='$.ajax({url: "/rooms/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' >الغرف الصفية</button>
	
<!-- 		  <button type="button" class="btn btn-info "  onclick='$.ajax({url: "/classes/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});' > الشعب</button>
		</p><p> -->
		  <button type="button" class="btn"   onclick='$.ajax({url: "/subjects/adminGrid?school_id=<?php echo $model->id?>",    complete: function(result) {  $( "#data-area" ).html( result.responseText );  move_to_div() ; }});'  >المقررات</button>
		  </div>

	
</div>	
	
 </div> 
</div>
<span class="white" > 
	<div id='data-area' >
	</div>

	<script>
	function move_to_div(){
		var target = $(this.hash); target = target.length ? target : $("#data-area"); 
		$('.form-group > label').addClass('control-label');
		$('extarea').addClass('form-control');
		$('input').addClass('form-control');
		
		if (target.length) {$("html,body").animate({scrollTop: target.offset().top - 100}, 750 );} 
		
	}
	</script>
</span>
