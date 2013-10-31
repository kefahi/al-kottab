<?php
/* @var $this GradesController */
/* @var $model Grades */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Grades', 'url'=>array('index')),
	array('label'=>'Create Grades', 'url'=>array('create')),
	array('label'=>'Update Grades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Grades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Grades', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>
<div class="jumbotron">
  <div class="container">
  <div class="col-md-8">
    
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' =>array('class'=>''	),
	'attributes'=>array(
		'id',
		'name', 
		array('label'=>$model->attributeLabels()['ordinal'] , 'value' => $model->getOrdinal() ),
		array('label'=>$model->attributeLabels()['cgroup'] , 'value' =>  $model->getCGroup() ),
		array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
		array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),				
	),
)); ?>
	</div>
	<div class="col-md-2" >
		<p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/student/?school_id=<?php echo $model->id?>';"  >الطلاب </button>
		 </p><p>
		  <button type="button" class="btn btn-info"  onclick="location.href ='/teacher/?school_id=<?php echo $model->id?>';"   >المعلمين</button>		  
		</p><p>
		<button type="button"  onclick="location.href ='/classes/admin/?grade_id=<?php echo $model->id?>';"   class="btn btn-info ">الشعب</button>
		</p>
		  
		</p>
	</div>
	

	<div class="col-md-2" >
		<p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/student/create'"  > ادخال طالب جديد </button>
		 </p><p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/classes/create'">ادخال شعبة</button>
		</p>
	</div>
	<hr />

 </div> 
</div>