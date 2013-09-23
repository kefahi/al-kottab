<?php
/* @var $this UsersController */
/* @var $model Users */
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
		<?php echo $form->label($model,'user_name'); ?>
		<?php echo $form->textArea($model,'user_name',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textArea($model,'first_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'second_name'); ?>
		<?php echo $form->textArea($model,'second_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'third_name'); ?>
		<?php echo $form->textArea($model,'third_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fourth_name'); ?>
		<?php echo $form->textArea($model,'fourth_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'birth_location'); ?>
		<?php echo $form->textArea($model,'birth_location',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mobiles'); ?>
		<?php echo $form->textArea($model,'mobiles',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'land_line'); ?>
		<?php echo $form->textArea($model,'land_line',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'national_id'); ?>
		<?php echo $form->textArea($model,'national_id',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'national_id_type'); ?>
		<?php echo $form->textField($model,'national_id_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guardian_id'); ?>
		<?php echo $form->textField($model,'guardian_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class_id'); ?>
		<?php echo $form->textField($model,'class_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_data'); ?>
		<?php echo $form->textArea($model,'student_data',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->