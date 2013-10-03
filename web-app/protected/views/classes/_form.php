<?php
/* @var $this ClassesController */
/* @var $model Classes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'room_id'); ?>
		<?php echo $form->textField($model,'room_id'); ?>
		<?php echo $form->error($model,'room_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
		<?php echo $form->error($model,'grade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
		<?php echo $form->error($model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saturday'); ?>
		<?php echo $form->textField($model,'saturday'); ?>
		<?php echo $form->error($model,'saturday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sunday'); ?>
		<?php echo $form->textField($model,'sunday'); ?>
		<?php echo $form->error($model,'sunday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monday'); ?>
		<?php echo $form->textField($model,'monday'); ?>
		<?php echo $form->error($model,'monday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tuesday'); ?>
		<?php echo $form->textField($model,'tuesday'); ?>
		<?php echo $form->error($model,'tuesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wednesday'); ?>
		<?php echo $form->textField($model,'wednesday'); ?>
		<?php echo $form->error($model,'wednesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thrusday'); ?>
		<?php echo $form->textField($model,'thrusday'); ?>
		<?php echo $form->error($model,'thrusday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'friday'); ?>
		<?php echo $form->textField($model,'friday'); ?>
		<?php echo $form->error($model,'friday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->