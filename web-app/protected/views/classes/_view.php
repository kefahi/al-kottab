<?php
/* @var $this ClassesController */
/* @var $data Classes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_id')); ?>:</b>
	<?php echo CHtml::encode($data->room_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_id')); ?>:</b>
	<?php echo CHtml::encode($data->grade_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_id')); ?>:</b>
	<?php echo CHtml::encode($data->school_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capacity')); ?>:</b>
	<?php echo CHtml::encode($data->capacity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('saturday')); ?>:</b>
	<?php echo CHtml::encode($data->saturday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sunday')); ?>:</b>
	<?php echo CHtml::encode($data->sunday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monday')); ?>:</b>
	<?php echo CHtml::encode($data->monday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tuesday')); ?>:</b>
	<?php echo CHtml::encode($data->tuesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wednesday')); ?>:</b>
	<?php echo CHtml::encode($data->wednesday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thrusday')); ?>:</b>
	<?php echo CHtml::encode($data->thrusday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('friday')); ?>:</b>
	<?php echo CHtml::encode($data->friday); ?>
	<br />

	*/ ?>

</div>