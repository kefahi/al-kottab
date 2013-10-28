<?php
/* @var $this TeacherController */
/* @var $model Teacher */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'teacher-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fourth_name'); ?>
		<?php echo $form->textField($model,'fourth_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'fourth_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender' , array( 1=>'ذكر' ,2=>'انثى' ) ,array('class'=>'selectpicker'   )); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'Teacher[birth_date]',));  
			echo $form->error($model,'birth_date');
			?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_location'); ?>
		<?php echo $form->textField($model,'birth_location',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'birth_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobiles'); ?>
		<?php echo $form->textField($model,'mobiles',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mobiles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'land_line'); ?>
		<?php echo $form->textField($model,'land_line',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'land_line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'national_id'); ?>
		<?php echo $form->textField($model,'national_id',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'national_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'national_id_type'); ?>
		<?php echo $form->textField($model,'national_id_type'); ?>
		<?php echo $form->error($model,'national_id_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->