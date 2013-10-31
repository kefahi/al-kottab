<?php
/* @var $this BusesController */
/* @var $data Buses */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_go')); ?>:</b>
	<?php echo CHtml::encode($data->route_go); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('route_back')); ?>:</b>
	<?php echo CHtml::encode($data->route_back); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drivers')); ?>:</b>
	<?php echo CHtml::encode($data->drivers); ?>
	<br />


</div>