<?php
/* @var $this MessagesController */
/* @var $data Messages */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('severity')); ?>:</b>
	<?php echo CHtml::encode($data->severity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sender_id')); ?>:</b>
	<?php echo CHtml::encode($data->sender_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recipient_id')); ?>:</b>
	<?php echo CHtml::encode($data->recipient_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('body')); ?>:</b>
	<?php echo CHtml::encode($data->body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_status')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delivery_method')); ?>:</b>
	<?php echo CHtml::encode($data->delivery_method); ?>
	<br />

	*/ ?>

</div>