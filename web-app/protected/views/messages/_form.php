<?php
/* @var $this MessagesController */
/* @var $model Messages */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'severity'); ?>
		<?php echo $form->textField($model,'severity'); ?>
		<?php echo $form->error($model,'severity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_id'); ?>
		<?php echo $form->textField($model,'sender_id'); ?>
		<?php echo $form->error($model,'sender_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recipient_id'); ?>
		<?php echo $form->textField($model,'recipient_id'); ?>
		<?php echo $form->error($model,'recipient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textArea($model,'subject',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_status'); ?>
		<?php echo $form->textField($model,'delivery_status'); ?>
		<?php echo $form->error($model,'delivery_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_method'); ?>
		<?php echo $form->textField($model,'delivery_method'); ?>
		<?php echo $form->error($model,'delivery_method'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->