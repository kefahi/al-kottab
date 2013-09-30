<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form col-lg-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'school_id'); ?>
		<?php echo $form->dropDownList($model,'school_id' , Schools::getList() , array('class'=>'selectpicker'  , 'data-live-search'=>"true")); ?>
		<?php echo $form->error($model,'school_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'user_name'); ?>
		<?php echo $form->textField($model,'user_name'); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name'); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'second_name'); ?>
		<?php echo $form->textField($model,'second_name'); ?>
		<?php echo $form->error($model,'second_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'third_name'); ?>
		<?php echo $form->textField($model,'third_name'); ?>
		<?php echo $form->error($model,'third_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fourth_name'); ?>
		<?php echo $form->textField($model,'fourth_name'); ?>
		<?php echo $form->error($model,'fourth_name'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender' , array( 1=>'ذكر' ,2=>'انثى' ) ,array('class'=>'selectpicker'   )); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="form-group">
		<?php 
		echo $form->labelEx($model,'birth_date'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'Student[birth_date]',));  
		echo $form->error($model,'birth_date');
		?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'birth_location'); ?>
		<?php echo $form->textField($model,'birth_location'); ?>
		<?php echo $form->error($model,'birth_location'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mobiles'); ?>
		<?php echo $form->textField($model,'mobiles'); ?>
		<?php echo $form->error($model,'mobiles'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'land_line'); ?>
		<?php echo $form->textField($model,'land_line',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'land_line'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'national_id'); ?>
		<?php echo $form->textField($model,'national_id',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'national_id'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'national_id_type'); ?>
		<?php echo $form->textField($model,'national_id_type'); ?>
		<?php echo $form->error($model,'national_id_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


<script>
 $(function() { $( ".date" ).datepicker();  } );
                $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

    </script>