<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'الرسائل'=>array('index'),
	$model->subject,
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	array('label'=>'Create Messages', 'url'=>array('create')),
	array('label'=>'Update Messages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Messages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Messages', 'url'=>array('admin')),
);
?>



<div class="container">
	<h1><?php 		echo $model->subject  ; ?> </h1>

<?php 
	echo 'المرسل: ', $model->sender->first_name .' '.$model->sender->fourth_name  ;?>

	<!-- 	<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'htmlOptions' =>array('class'=>''	),
			'attributes'=>array(
				array('name'=>'created_at' ,'value' => Yii::app()->dateFormatter->format('EEE، d LLLL، yyyy ', $model->created_at))  ,
				array('name'=>'sender_id' ,'value' => $model->sender->first_name .' '.$model->sender->fourth_name )  ,
				// 'priority',
				// 'severity',
				// 'sender_id',
				// 'recipient_id',

				// 'subject',
				// 'body',

			),
		)); ?> -->
		<hr />
		
		<br />
		<?php 		echo $model->body  ; ?>
	</div> 
<br />