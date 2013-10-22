<?php
/* @var $this RequisitsController */
/* @var $data Requisits */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teacher_id')); ?>:</b>
	<?php echo CHtml::encode($data->teacher_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_id')); ?>:</b>
	<?php echo CHtml::encode($data->grade_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marks_credit')); ?>:</b>
	<?php echo CHtml::encode($data->marks_credit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('due_date')); ?>:</b>
	<?php echo CHtml::encode($data->due_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attachements')); ?>:</b>
	<?php echo CHtml::encode($data->attachements); ?>
	<br />

	*/ ?>

</div>