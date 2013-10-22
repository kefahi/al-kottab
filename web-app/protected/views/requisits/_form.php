<?php
/* @var $this RequisitsController */
/* @var $model Requisits */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'requisits-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php echo $form->labelEx($model,'teacher_id'); ?>
		<?php echo $form->textField($model,'teacher_id'); ?>
		<?php echo $form->error($model,'teacher_id'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
		<?php echo $form->error($model,'grade_id'); ?>
	</div>

<!-- 	<div class="row">
		<?php echo $form->labelEx($model,'marks_credit'); ?>
		<?php echo $form->textField($model,'marks_credit'); ?>
		<?php echo $form->error($model,'marks_credit'); ?>
	</div>
 -->
	<div class="row">
		<?php
			echo $form->labelEx($model,'due_date'); 
			$this->widget('zii.widgets.jui.CJuiDatePicker',array('name'=>'Requisits[due_date]',));  
			echo $form->error($model,'due_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>3, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type' , array('1'=>'إمتحان', '2'=>'واجب بيتي', '4'=>'بحث', '8'=>'اخرى', '16'=>'من خارج المنهاج')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attachements'); ?>
		<?php echo $form->fileField($model,'attachements'); ?>
		<?php echo $form->error($model,'attachements'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->