<?php
/* @var $this BusesController */
/* @var $model Buses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'route_go'); ?>
		<?php echo $form->textArea($model,'route_go'); ?>
		<?php echo $form->error($model,'route_go'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_back'); ?>
		<?php echo $form->textArea($model,'route_back'); ?>
		<?php echo $form->error($model,'route_back'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'drivers'); ?>
		<?php echo $form->textField($model,'drivers',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'drivers'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'إنشاء' : 'حفظ'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->