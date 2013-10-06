<?php
/* @var $this GradesController */
/* @var $model Grades */
/* @var $form CActiveForm */
?>

<div class="form col-lg-7">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grades-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'htmlOptions'=>array('role'=>'form' , 'class'=>'form-horizontal'),
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
		
	<div class="form-group">
		<?php echo $form->labelEx($model,'cgroup' ,array('class' =>'col-lg-2 control-label' , )); ?>
		<div class="col-lg-10">
			<?php echo $form->dropDownList($model,'cgroup' ,  array('1'=>'حضانة' , '2'=>'أساسي' ,'4'=> 'ابتدائي', '8'=>'إعدادي', '16'=>'ثانوي'  ) , array('class'=>'selectpicker' , 'data-live-search'=>"true") ); ?>
			<?php echo $form->error($model,'cgroup'); ?>
		</div>
	</div>

	
	<div class="form-group">
		<?php echo $form->labelEx($model,'ordinal' , array('class' =>'col-lg-2 control-label' , )); ?>
		<div class="col-lg-10">
			<?php echo $form->dropDownList($model,'ordinal' , array('1'=>'الأول', '2'=>'الثاني', '4'=>'الثالث', '8'=>'الرابع', '16'=>'الخامس', '32'=>'السادس', '64'=>'السابع', '128'=>'الثامن', '256'=>'التاسع', '512'=>'العاشر') , array('class'=>'selectpicker' , 'data-live-search'=>"true" )  ); ?>
			<?php echo $form->error($model,'ordinal'); ?>
		</div>
	</div>


	<div class="form-group">
		<?php echo $form->labelEx($model,'name' , array('class' =>'col-lg-2 control-label' )); ?>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'name',array( 'class' => 'col-lg-10' )); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>


	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script>$('.selectpicker').selectpicker();</script>