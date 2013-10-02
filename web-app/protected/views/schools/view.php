<?php
/* @var $this SchoolsController */
/* @var $model Schools */

$this->breadcrumbs=array(
	'Schools'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Schools', 'url'=>array('index')),
	array('label'=>'Create Schools', 'url'=>array('create')),
	array('label'=>'Update Schools', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schools', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schools', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->name; ?></h1>
<p class=lead ><?php echo  $model->description  ; ?> </p>
<div class="jumbotron">
  <div class="container">
  <div class="col-md-8">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions' =>array('class'=>''	),
			'attributes'=>array(
				'address',
				'phones',
				'notes',
				array('label'=>$model->attributeLabels()['created_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at) ),
				array('label'=>$model->attributeLabels()['updated_at'] , 'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->updated_at) ),
				array('label'=>'المحرر' , 'value' => $model->admin->first_name  .' ' . $model->admin->fourth_name),				
			))); ?>
	</div>
	<div class="col-md-2" >
		<p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/student/?school_id=<?php echo $model->id?>';"  >الطلاب </button>
		 </p><p>
		  <button type="button" class="btn btn-info disabled ">المعلمين</button>
		</p><p>
		  <button type="button" class="btn btn-info disabled">الإداريين</button>
		</p><p>
		  <button type="button" class="btn btn-info " onclick="location.href ='/grades/?school_id=<?php echo $model->id?>';" >الصفوف</button>
		</p>
	</div>
	

	<div class="col-md-2" >
		<p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/student/create?Student[school_id]=<?php echo $model->id?>';"  > ادخال طالب جديد </button>
		 </p><p>
		  <button type="button" class="btn btn-info disabled ">ادخال معلم</button>
		</p><p>
		  <button type="button" class="btn btn-info" onclick="location.href ='/grades/create?Student[school_id]=<?php echo $model->id?>';">ادخال فصل</button>
		</p>
	</div>
	<hr />

 </div> 
</div>

<div id='data-area' >
</div>