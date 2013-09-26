<?php
/* @var $this ClassesController */
/* @var $model Classes */
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
		<?php echo $form->label($model,'room_id'); ?>
		<?php echo $form->textField($model,'room_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school_id'); ?>
		<?php echo $form->textField($model,'school_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capacity'); ?>
		<?php echo $form->textField($model,'capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saturday'); ?>
		<?php echo $form->textField($model,'saturday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sunday'); ?>
		<?php echo $form->textField($model,'sunday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monday'); ?>
		<?php echo $form->textField($model,'monday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tuesday'); ?>
		<?php echo $form->textField($model,'tuesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wednesday'); ?>
		<?php echo $form->textField($model,'wednesday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thrusday'); ?>
		<?php echo $form->textField($model,'thrusday'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'friday'); ?>
		<?php echo $form->textField($model,'friday'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->