<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textArea($model,'user_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

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
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textArea($model,'first_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textArea($model,'second_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'third_name'); ?>
		<?php echo $form->textArea($model,'third_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'third_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fourth_name'); ?>
		<?php echo $form->textArea($model,'fourth_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fourth_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_location'); ?>
		<?php echo $form->textArea($model,'birth_location',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'birth_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobiles'); ?>
		<?php echo $form->textArea($model,'mobiles',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mobiles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'land_line'); ?>
		<?php echo $form->textArea($model,'land_line',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'land_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'national_id'); ?>
		<?php echo $form->textArea($model,'national_id',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'national_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'national_id_type'); ?>
		<?php echo $form->textField($model,'national_id_type'); ?>
		<?php echo $form->error($model,'national_id_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textArea($model,'password',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guardian_id'); ?>
		<?php echo $form->textField($model,'guardian_id'); ?>
		<?php echo $form->error($model,'guardian_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class_id'); ?>
		<?php echo $form->textField($model,'class_id'); ?>
		<?php echo $form->error($model,'class_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
		<?php echo $form->error($model,'grade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_data'); ?>
		<?php echo $form->textArea($model,'student_data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'student_data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->