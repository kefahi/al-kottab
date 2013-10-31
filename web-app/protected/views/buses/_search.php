<?php
/* @var $this BusesController */
/* @var $model Buses */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_go'); ?>
		<?php echo $form->textField($model,'route_go'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_back'); ?>
		<?php echo $form->textField($model,'route_back'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'drivers'); ?>
		<?php echo $form->textArea($model,'drivers',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->