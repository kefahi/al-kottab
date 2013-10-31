<?php
/* @var $this MessagesController */
/* @var $model Messages */
/* @var $form CActiveForm */
?>

<div class="form hero-unit">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'messages-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'delivery_method'); ?>
		<?php echo $form->dropDownList($model,'delivery_method' , array(1=>'رسالة قصيرة' , 4=>'البريد الإلكتروني' , 2=>'رسالة خاص' , )); ?>
		<?php echo $form->error($model,'delivery_method'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'recipient_id'); ?>
		<?php echo $form->textArea($model,'recipient_id'); ?>
		<?php echo $form->error($model,'recipient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php $this->renderPartial('/site/wysiwyg' ); ?>
		<script> $('#editor').attr('name' , 'Messages[body]');</script>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'إنشاء' : 'حفظ'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->