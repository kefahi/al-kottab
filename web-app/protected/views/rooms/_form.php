<?php
/* @var $this RoomsController */
/* @var $model Rooms */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rooms-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->dropDownList($model,'school_id' , Schools::getList() , array('class'=>'selectpicker'  )); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
		<?php echo $form->error($model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'details'); ?>
		<?php echo $form->textArea($model,'details',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'details'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script> $(function(){ $('.selectpicker').selectpicker({}); } ) ;</script>